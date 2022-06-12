<template>
    <div class="grid grid-cols-6">

        <div class="flex flex-col items-center pt-2 pb-2" v-for="(recipe) in rune_recipes">

            <p class="font-semibold">{{ recipe.name }}</p>
            <div class="flex items-center">
                <img :src="recipe.image" class="" alt="">
            </div>

            <div class="flex flex-row mt-2" v-for="index in recipe.rune_count" :key="index">
                <img :src="recipe.runes[0].image" class="object-scale-down h-10 w-10" alt="">
                <img :src="recipe.runes[0].image" class="object-scale-down h-10 w-10" alt="">
                <img :src="recipe.runes[0].image" class="object-scale-down h-10 w-10" alt="">
                <img v-if="recipe.gem !== null" :src="recipe.gem.image" class="object-scale-down h-11 w-11" alt="">
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
