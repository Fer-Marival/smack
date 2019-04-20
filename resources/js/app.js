require('./bootstrap');
require('./main.js');

window.Vue = require('vue');

<<<<<<< HEAD
=======
Vue.component('form-component', require('./components/FormComponent.vue'));
Vue.component('user-component', require('./components/UserComponent.vue'));
Vue.component('first-component', require('./components/FirstComponent.vue'));


>>>>>>> 5bf8c54af38c0c3c8f282faa832ace7de8979e78
const app = new Vue({
    el: '#id'
});
 