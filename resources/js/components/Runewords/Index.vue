<template>
    <div class="pt-2 grid grid-cols-3">

        <div class="p-2" v-for="(runeword) in runewords">
            <div class="item p-2">
                <h2 class="font-bold">{{ runeword.name }}</h2>
                <p class="font-semibold">{{ runeword.combination }}</p>
                <div class="flex flex-column">
                    <div v-for="(rune) in runeword.runes" :key="rune.priority">
                        <img :src="rune.image" class="rounded-md h-10 w-10" alt="">
                    </div>
                </div>
                <p class="font-semibold">Level: {{ runeword.level }}</p>
                <p class="font-semibold">{{ runeword.item_type }}</p>
                <p class="attributes mt-1" v-for="attr in runeword.attributes">
                    {{ attr }}
                </p>
                <p class="font-semibold">Ladder only: {{ runeword.ladder_only === 0 ? 'False' : 'True' }}</p>
            </div>
        </div>

    </div>
</template>

<script>
export default {
    props: {
        runewords: {
            required: true,
            runes: [],
        }
    },

}
</script>

