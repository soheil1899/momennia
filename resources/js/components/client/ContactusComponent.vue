<template>
    <div class="col-12 col-lg-7 col-md-10 mt-5 mx-auto border-right border-left text-right" dir="rtl">


        <div class="row mb-2 px-3">
            <div class="col-3">
<!--                <strong>موبایل :</strong>-->
            </div>
            <div class="col-9"><strong>
                {{setting['aboutus']}}
            </strong></div>
        </div>
        <div class="row mb-2 px-3">
            <div class="col-3">
                <strong>موبایل :</strong>
            </div>
            <div class="col-9">
                {{setting['mobile']}}
            </div>
        </div>
        <div class="row mb-5 pb-5 px-3">
            <div class="col-3">
                <strong>ایمیل :</strong>
            </div>
            <div class="col-9">
                {{setting['email']}}
            </div>
        </div>




        <error :error="error"></error>

        <div class="row mb-2">
            <div class="col-6">
                <input type="text" v-model="name" class="form-control" placeholder="نام">
            </div>
            <div class="col-6">
                <input type="text" v-model="family"  class="form-control" placeholder="نام خانوادگی">
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-6">
                <input type="text" v-model="email" class="form-control" placeholder="ایمیل">
            </div>
            <div class="col-6">
                <input type="text" v-model="mobile" class="form-control" placeholder="موبایل">
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-12">
                <input type="text" v-model="address" class="form-control" placeholder="آدرس">
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-12">
                <textarea class="form-control" v-model="message" rows="10" placeholder="متن پیام شما..."></textarea>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-12">
                <input type="button" class="btn btn-outline-success px-4 float-left mt-3" @click="savemessage" value="ارسال پیام">
            </div>
        </div>


    </div>
</template>

<script>
    export default {
        name: "ContactusComponent",
        data() {
            return {
                name: null,
                family: null,
                email: null,
                mobile: null,
                address: null,
                message: null,
                error: [],
            }
        },
        props:['setting'],
        methods:{

            savemessage(){
                let that = this;
                this.error = [];

                let data = {
                    name: this.name,
                    family: this.family,
                    email: this.email,
                    mobile: this.mobile,
                    address: this.address,
                    message: this.message
                };

                axios.post('/savemessage', data)
                    .then(function (response) {

                    }).catch((error) => {
                    that.error = error.response.data.errors;
                });
            },
        },
        mounted() {
        }
    }
</script>

<style scoped>

</style>
