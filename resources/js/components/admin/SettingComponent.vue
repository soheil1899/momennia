<template>

    <div>
        <h4 class="admin-title py-3 px-4"> تنظیمات وب سایت </h4>

        <div class="col-8 mr-auto ml-auto">
            <div class="row pt-5">
                <div class="col-3 text-left" >موبایل :</div>
                <div class="col-9">
                    <input class="form-control" type="text" v-model="settinglist['mobile']">
                </div>
            </div>

            <div class="row pt-2">
                <div class="col-3 text-left" >تلفن :</div>
                <div class="col-9">
                    <input class="form-control" type="text" v-model="settinglist['tellphone']">
                </div>
            </div>

            <div class="row pt-2">
                <div class="col-3 text-left">فکس :</div>
                <div class="col-9">
                    <input class="form-control" type="text" v-model="settinglist['fax']">
                </div>
            </div>
            <div class="row pt-2">
                <div class="col-3 text-left" >ایمیل :</div>
                <div class="col-9">
                    <input class="form-control"  type="text" v-model="settinglist['email']">
                </div>
            </div>
            <div class="row pt-2">
                <div class="col-3 text-left" >آدرس :</div>
                <div class="col-9">
                    <textarea class="form-control" rows="3" v-model="settinglist['address']"></textarea>
                </div>
            </div>

            <div class="row pt-2">
                <div class="col-3 text-left" >نام شرکت فارسی :</div>
                <div class="col-9">
                    <input class="form-control" type="text" v-model="settinglist['company_name']">
                </div>
            </div>
            <div class="row pt-2">
                <div class="col-3 text-left" >نام شرکت انگلیسی :</div>
                <div class="col-9">
                    <input class="form-control" type="text" v-model="settinglist['company_name_en']">
                </div>
            </div>
            <div class="row pt-2">
                <div class="col-3 text-left" >توضیحات سایت :</div>
                <div class="col-9">
                    <input class="form-control" type="text" v-model="settinglist['header_description']">
                </div>
            </div>
            <div class="row pt-2">
                <div class="col-3 text-left" >کلیدواژه سایت :</div>
                <div class="col-9">
                    <v-select :multiple="true" v-model="settinglist['keywords']" :taggable="true" :no-drop="true"
                              :clearable="false" dir="rtl"></v-select>
                </div>
            </div>
<!--            <div class="row pt-2">-->
<!--                <div class="col-3 text-left" >زبان پیشفرض سایت :</div>-->
<!--                <div class="col-9">-->
<!--                    <v-select v-model="langselect" :options="langs" label="lang"-->
<!--                              :clearable="false"-->
<!--                              placeholder="یکی از زبان ها را انتخاب کنید" class="mb-2"></v-select>-->
<!--                </div>-->
<!--            </div>-->

<!--            <div class="row pt-2">-->
<!--                <div class="col-3 text-left" >لوگو سایت :</div>-->
<!--                <div class="row col-9">-->
<!--                    <div class="col-6">-->
<!--                        <button type="button" @click="browselogo" class="btn btn-success btn-sm">تغییر تصویر لوگو-->
<!--                        </button>-->
<!--                        <input type="file" class="d-none" id="browse" ref="logo"-->
<!--                               @change="selectlogo">-->
<!--                    </div>-->
<!--                    <div class="col-6 text-left" >-->
<!--                        <img :src="logoimage" width="70%" height="70%" alt="">-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="row pt-2">-->
<!--                <div class="col-3 text-left" >تصویر درباره ما :</div>-->
<!--                <div class="row col-9 mb-2">-->
<!--                    <div class="col-12 mb-2">-->
<!--                        <button type="button" @click="browsebanner" class="btn btn-success btn-sm">تغییر تصویر پس زمینه-->
<!--                        </button>-->
<!--                        <input type="file" class="d-none" id="browse2" ref="banner"-->
<!--                               @change="selectbanner">-->
<!--                    </div>-->
<!--                    <div class="col-12 text-left" >-->
<!--                        <img :src="bannerimage" height="200px" alt="">-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->

            <div class="row pt-2">
                <div class="col-3 text-left" >درباره ما :</div>
                <div class="col-9">
                    <textarea class="form-control" rows="7" v-model="settinglist['aboutus']"></textarea>
                </div>
            </div>
        </div>



<!--        <div class="row pt-2 mt-3">-->
<!--            <div class="col-2 mb-2 text-left" >متن کامل درباره ما :</div>-->
<!--            <div class="col-12">-->
<!--                <div class="row">-->
<!--                    <div class="col-12 col-lg-9" dir="ltr">-->
<!--                        <editor v-model="settinglist['aboutus_all']" ref="editor"-->
<!--                                api-key="qc1sdre33bdx4lkj24aw4ffoeyx1rvbohr9ow2hzhjgfu2mi"-->
<!--                                :init="{plugins: 'wordcount','directionality': 'rtl','height':300}"></editor>-->
<!--                    </div>-->
<!--                    <div class="col-12 col-lg-3">-->
<!--                        <div class="card">-->
<!--                            <div class="card-header row m-0 p-1 pt-2">-->
<!--                                <div class="col-8">-->
<!--                                    مدیریت فایل-->
<!--                                </div>-->
<!--                                <div class="col-4 icons">-->
<!--                                    <i @click="browsefile3" class="fas fa-plus-square fa-2x"></i>-->
<!--                                </div>-->
<!--                                <input type="file" class="d-none" id="browse3" ref="imagetext"-->
<!--                                       @change="selectimage">-->
<!--                            </div>-->
<!--                            <div class="card-body p-2">-->
<!--                                <div v-for="file in filemanagerids" :key="file.id"-->
<!--                                     class="m-1 float-right position-relative">-->
<!--                                    <img :src="file.small" @click="selectImage(file.original)">-->
<!--                                    <i class="fas fa-trash position-absolute delete-filemanager"></i>-->
<!--                                </div>-->

<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->

        <div class="col-8 mx-auto my-5">
            <input type="button" class="btn btn-primary btn-block btn-lg" @click="savesetting" value="ذخیره تنظیمات">
        </div>
    </div>


</template>

<script>


    import Editor from '@tinymce/tinymce-vue';

    export default {
        name: "SettingComponent",
        components: {
            'editor': Editor
        },
        data() {
            return {
                settinglist: [],
                error: [],
                keywords: [],
                filemanagerids: [],
                logoimage: null,
                bannerimage: null,

                langs: [],
                langselect: {
                    'id': null,
                    'lang': null,
                },
            }
        },
        methods: {

            savesetting(){
                let that = this;
                let data = {
                    setting: this.settinglist,
                    lang: this.langselect,
                };
                axios.post('/dashboard/savesetting', data)
                    .then(function (response) {
                        that.reloadPage();
                    });

            },


            selectImage(original) {
                let Imagetag = '<img src="' + original + '" width="200px">';
                this.settinglist['aboutus_all'] += Imagetag;
            },

            browsefile3() {
                document.getElementById("browse3").click();
            },

            selectimage() {
                let that = this;
                let formData = new FormData();
                formData.append('image', this.$refs.imagetext.files[0]);
                axios.post('/dashboard/savefile'
                    , formData
                    , {
                        headers: {
                            'Content-Type': 'multipart/form-data'
                        }

                    })
                    .then(function (response) {
                        let newfile = [];
                        newfile['small'] = '/media/filemanager/itemsmall_' + response.data + '.png';
                        newfile['original'] = '/media/filemanager/item_' + response.data + '.png';
                        that.filemanagerids.push(newfile);
                    });
            },

            reloadPage() {
                let that = this;
                axios.post('/dashboard/getsetting')
                    .then(function (response) {
                        that.settinglist = response.data[0][0];

                        that.langs = response.data[2];

                        for (var i=0; i<that.langs.length; i++){
                            if(that.langs[i]['id'] == that.settinglist['default_lang']){
                                that.langselect['id'] = that.langs[i]['id'];
                                that.langselect['lang'] = that.langs[i]['lang'];
                            }
                        }

                        // that.logoimage = '/media/cite/' + that.settinglist['logo_image'] + '.png';
                        // that.bannerimage = '/media/cite/' + that.settinglist['aboutus_image'] + '.png';
                        //
                        // that.filemanagerids = [];
                        // for (var i = 0; i < response.data[1].length; i++) {
                        //     let newfile = [];
                        //     newfile['small'] = '/media/filemanager/itemsmall_' + response.data[1][i]['randomnum'] + '.png';
                        //     newfile['original'] = '/media/filemanager/item_' + response.data[1][i]['randomnum'] + '.png';
                        //     that.filemanagerids.push(newfile);
                        // }

                    });
            },

            browselogo() {
                document.getElementById("browse").click();
            },

            selectlogo() {
                let that = this;
                let formData = new FormData();
                formData.append('logoimage', this.$refs.logo.files[0]);

                axios.post('/dashboard/savelogoimage'
                    , formData
                    , {
                        headers: {
                            'Content-Type': 'multipart/form-data'
                        }

                    })
                    .then(function (response) {
                        that.logoimage = '/media/cite/logo.png?'+ response.data;
                    });
            },

            browsebanner() {
                document.getElementById("browse2").click();
            },

            selectbanner() {
                let that = this;
                let formData = new FormData();
                formData.append('bannerimage', this.$refs.banner.files[0]);

                axios.post('/dashboard/savebannerimage'
                    , formData
                    , {
                        headers: {
                            'Content-Type': 'multipart/form-data'
                        }

                    })
                    .then(function (response) {
                        that.bannerimage = '/media/cite/banner.png?'+ response.data;
                    });
            },



            // editTag(id, tag){
            //     this.error = [];
            //     this.editflag = true;
            //     this.tagid = id;
            //     this.tag = tag;
            // },
            //
            // addtag(){
            //     this.error = [];
            //     this.editflag = false;
            //     this.tagid = null;
            //     this.tag = null;
            // },
            //
            // savetag(){
            //     let that = this;
            //     let data = {
            //         editflag: this.editflag,
            //         tagid: this.tagid,
            //         tag: this.tag,
            //     };
            //     axios.post('/dashboard/savetag', data)
            //         .then(function (response) {
            //             $('#Modal').modal('hide');
            //             that.reloadPage();
            //         });
            // },

        }
        ,

        mounted() {
            this.reloadPage();
        }


    }


</script>

<style scoped>


</style>
