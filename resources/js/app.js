require('./bootstrap');
require('./main.js');

window.Vue = require('vue');


Vue.component('example-component', require('./components/ExampleComponent.vue'));
vue.component('user-component', require('./components/UserComponent.vue'))

const app = new Vue({
    el: '#app'
});
 