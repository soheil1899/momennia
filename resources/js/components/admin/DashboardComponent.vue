<template>
    <div class="row" id="dashboard">
        <div class="container">
            <div class="row mt-5 mx-0">
                <div class="col-3 box-item py-4 dashboard-first">
                    <a :href="'/dashboard/setting'">
                        <i class="fas fa-users fa-3x mb-2"></i>
                        تنظیمات
                    </a>
                </div>

                <div class="col-3 box-item py-4 dashboard-second">
                    <a :href="'/dashboard/posts'">
                        <i class="far fa-comment-alt fa-3x mb-2"></i>
                        پیام ها
                    </a>
                </div>


            </div>



        </div>



    </div>
</template>

<script>

    export default {
        name: "DashboardComponent",

        props: ['useraccess', 'writeraccess'],

        data() {
            return {
                userflag: false,
                writeflag: false,
            }
        },

        methods: {},

        mounted() {
        }
    }
</script>

<style scoped>

</style>
