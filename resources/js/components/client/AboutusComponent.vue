<template>
    <div class="row">
<div class="col-6 title-aboutus">
        <strong>
        <div v-html="about_us" class="text-center" dir="rtl">
        </div>
        </strong>
</div>

        <div class="col-6">
            <img src="/media/cite/owner.png" class="aboutus-img">
        </div>

    </div>
</template>

<script>
    export default {
        name: "AboutusComponent",
        props: ['aboutus'],
        data(){
            return{
                about_us: null,
            }
        },
        mounted() {
            this.about_us = this.aboutus['aboutus_all'];
            // console.log(this.aboutus);
        }
    }
</script>

<style scoped>

</style>
