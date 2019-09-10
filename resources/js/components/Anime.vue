<template>
<div>
    <a :href="'/anime/' + data.id ">
        <div class="top-card">
            <div class="top-half-card">
                <div class="top-half-card-helper-2"></div>
                <div class="top-half-card-helper">
                    <img :src="data.images.src">
                </div>
            </div>
            <div class="bottom-half-card">
                <div class="bottom-half-card-helper">
                    <div class="bottom-half-half">
                        <div class="bottom-half-bg"></div>
                        <img :src="data.images.src">
                    </div>
                    <div class="bottom-half-half"><span v-text="data.name"></span> <br /><br />
                        <div class="bottom-half-desc">
                            <span>Series</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span
                                class="diamond"></span><span>Subtitled</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </a>
</div>
</template>

<script>
    export default {
        props: ['data'],
        data() {
            return {

            }
        }
    }

</script>
