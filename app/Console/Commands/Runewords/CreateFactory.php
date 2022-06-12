<?php

namespace App\Console\Commands\Runewords;

use Illuminate\Console\Command;
use Illuminate\Support\Str;

class CreateFactory extends Command
{
    protected $signature = 'runeword:create-factory';
    protected $description = 'Creates the factory class for Runewords based off a JSON file';

    public function handle(): int
    {
        $factoryFile = 'database/factories/RunewordFactory.php';
        $runewordsFile = storage_path('app/runewords.json');

        if (!is_file($runewordsFile)) {
            $this->info('No runeword json file available. Aborted!');
            return 0;
        }

        $runewords = json_decode(file_get_contents($runewordsFile));

        $classSkeleton = <<<BODY
        <?php

        namespace Database\Factories;

        use App\Models\Runeword;
        use Illuminate\Database\Eloquent\Factories\Factory;

        class RunewordFactory extends Factory
        {
            protected \$model = Runeword::class;

            public function definition(): array
            {
                return [
                    //
                ];
            }

        BODY;

        foreach ($runewords as $runeword) {

            $sAttributes = implode(' | ', $runeword->attributes);
            $fName = Str::camel($runeword->name);
            $bLadder = $runeword->ladderOnly ? 1 : 0;
            $combination = implode('-', $runeword->runes);

            $itemSkeleton = <<<ITEM

                public function $fName(): self
                {
                    return \$this->state([
                        'name' => '$runeword->name',
                        'combination' => "$combination",
                        'level' => $runeword->level,
                        'attributes' => "$sAttributes",
                        'item_type' => '$runeword->itemType',
                        'ladder_only' => $bLadder
                    ]);
                }

            ITEM;

            $classSkeleton .= $itemSkeleton;
        }

        $classSkeleton .= '}';

        file_put_contents($factoryFile, $classSkeleton);

        return 0;
    }
}
