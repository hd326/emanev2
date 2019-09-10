<template>
    <div>
        <div class="top-card-group" v-if="showLess">
            <div v-for="(anime, index) in data" v-if="index <= 5">
                <anime :data="anime"></anime>
            </div>
        </div>
        <div class="top-card-group" v-else>
            <div v-for="anime in data">
                <anime :data="anime"></anime>
            </div>
        </div>

        <!-- show button -->
        <div><button v-show="showLess" id="show-more" @click="showLess = false">SHOW MORE</button></div>
        <!-- show button -->
    </div>
</template>
<script>
    import Anime from './Anime.vue';
    export default {
        props: ['data'],
        components: {
            Anime
        },
        data() {
            return {
                showLess: true,
                anime: this.data
            }
        }
    }
</script>
