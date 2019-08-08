
require('./bootstrap');

window.Vue = require('vue');
window.axios=require('axios');




Vue.component('aboutus-component', require('./components/client/AboutusComponent.vue').default);
Vue.component('contactus-component', require('./components/client/ContactusComponent.vue').default);
Vue.component('slider-component', require('./components/client/SliderComponent.vue').default);




Vue.component('error', require('./components/custom/error.vue').default);



const app = new Vue({
    el: '#client',
});





/* npms

npm install verte --save


*/