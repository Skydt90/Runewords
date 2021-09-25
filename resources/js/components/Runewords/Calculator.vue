<template>

    <div class="page-container">

        <div class="runeword-card bg-gray-400 shadow-md flex flex-col mt-5 py-3 rounded-md">
            <div class="rune-container px-2 grid grid-cols-11">

                <div v-for="(rune, index) in runes" :key="rune.id">
                    <div class="flex flex-col items-center">
                        <img @click="selected(rune.id, $event)" :src="rune.image" class="rounded-md" alt="">
                        <p class="text-sm text-black">{{ rune.name }}</p>
                    </div>
                </div>

            </div>
        </div>

        <div class="available-runewords-container pt-2 flex flex-wrap">
            <div class="p-2" v-for="(runeword) in availableRunewords">
                <div class="item">
                    <h2 class="font-bold">{{ runeword.name }}</h2>
                    <p class="font-semibold">{{ runeword.combination }}</p>
                    <p class="font-semibold">Level: {{ runeword.level }}</p>
                    <p class="font-semibold">{{ runeword.item_type }}</p>
                    <p class="attributes mt-1" v-for="attr in runeword.attributes">
                        {{ attr }}
                    </p>
                    <p class="font-semibold">Ladder only: {{ runeword.ladder_only === 0 ? 'False' : 'True' }}</p>
                </div>
            </div>
        </div>

    </div>

</template>

<script>
export default {
    props: {
        runes: {
            required: true,
            name: String,
            attributes: String,
            image: String,
            level: Number
        },
        runewords: {
            required: true,
            combination: String,
            item_type: String,
            ladder_only: Number,
            attributes: [],
            runes: [],
        }
    },
    data() {
        return {
            activeColor: 'bg-green-700',
            selectedRunes: [],
            availableRunewords: [],
        }
    },
    methods: {
        selected(id, data) {
            let imgElement = data.target;
            // add or remove green color
            imgElement.classList[1] === this.activeColor ? imgElement.classList.remove(this.activeColor) : imgElement.classList.add(this.activeColor);

            // add or remove runeword
            !this.selectedRunes.includes(id) ? this.selectedRunes.push(id) : this.selectedRunes.splice(this.selectedRunes.indexOf(id), 1);

            this.checkForAvailableRunewords();
        },

        checkForAvailableRunewords() {
            // let checker = (arr, target) => target.every(v => arr.includes(v));
            this.runewords.forEach((runeword) => {

                if (runeword.runes.every(rune => this.selectedRunes.includes(rune)) && !this.availableRunewords.includes(runeword)) {
                    this.availableRunewords.push(runeword);

                } else if (!runeword.runes.every(rune => this.selectedRunes.includes(rune)) && this.availableRunewords.includes(runeword)) {
                    this.availableRunewords.splice(this.availableRunewords.indexOf(runeword), 1);
                }
            });
        }
    }
}
</script>

<style scoped>

</style>
