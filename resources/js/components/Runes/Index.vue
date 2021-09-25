<template>
    <div class="pt-2 grid grid-cols-6">

        <div class="p-2" v-for="(rune) in runes">
            <div class="item p-2">
                <img :src="rune.image" class="rounded-md" alt="">
                <h2 class="font-bold">{{ rune.name }}</h2>
                <p class="font-semibold">Level:{{ rune.level }}</p>
                <p class="attributes" v-for="attr in rune.attributes">
                    {{ attr }}
                </p>
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
    }
}
</script>

<style scoped>

</style>
