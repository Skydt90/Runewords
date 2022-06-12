<template>
    <div class="grid grid-cols-4">

        <div class="flex items-center pt-2 pb-2" v-for="(recipe) in rune_recipes">

            <div class="title-image flex flex-col items-center">
                <p class="font-semibold m-auto">{{ recipe.name }}</p>
                <img :src="recipe.image" class="" alt="">
            </div>

            <div class="content flex flex-row mt-4 items-center ml-2" v-for="index in recipe.rune_count" :key="index">

                <div class="count-container flex items-center mt-2">
                    <p>{{ recipe.rune_count }} x</p>
                    <img :src="recipe.runes[0].image" class="object-scale-down h-10 w-10 ml-2" alt="">
                </div>

                <div v-if="recipe.gem !== null" class="gem flex items-center ml-2 mt-3">
                    <p> + 1 x</p>
                    <img :src="recipe.gem.image" class="object-scale-down h-10 w-10" alt="">
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        rune_recipes: {
            required: true,
            name: String,
            image: String,
            rune_count: Number,
            runes: [],
            gem: []
        },
    }
}
</script>

<style scoped>

</style>
