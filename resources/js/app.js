
require('./bootstrap');

window.Vue = require('vue');
window.axios=require('axios');

import tinymce from 'vue-tinymce-editor';
Vue.component('tinymce', tinymce);


Vue.component('dashboard-component', require('./components/admin/DashboardComponent.vue').default);
Vue.component('slider-component', require('./components/admin/SliderComponent.vue').default);
Vue.component('setting-component', require('./components/admin/SettingComponent.vue').default);
Vue.component('customer-component', require('./components/admin/CustomerComponent.vue').default);
Vue.component('comment-component', require('./components/admin/CommentComponent.vue').default);
Vue.component('userinfo-component', require('./components/admin/UserinfoComponent.vue').default);


Vue.component('error', require('./components/custom/error.vue').default);






const app = new Vue({
    el: '#app',
});





/* npms

npm install verte --save


*/
