require('./bootstrap');
//require('./main.js');

window.Vue = require('vue');

Vue.component('user-component', require('./components/UserComponent.vue'));
Vue.component('first-component', require('./components/FirstComponent.vue'));

const app = new Vue({
    el: '#app'
});
 