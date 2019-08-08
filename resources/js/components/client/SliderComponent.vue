<template>
    <div class="slider-main">
        <carousel :data="data" :indicators="false"></carousel>
    </div>
</template>

<script>

    import VueCarousel from '@chenfengyuan/vue-carousel';

    export default {
        name: "SliderComponent",
        components:{
            VueCarousel,
        },
        data(){
            return{
                data: [
                    '<img src="/media/slider/1/original_10349.png" height="350px">',
                    '<img src="/media/slider/1/original_24900.png" height="350px">',
                    '<img src="/media/slider/1/original_25445.png" height="350px">',
                    '<img src="/media/slider/1/original_55971.png" height="350px">',
                ],
                srcs: null,
            }
        },
        props:['slider'],
        mounted() {
        }
    }
</script>

<style scoped>

</style>
