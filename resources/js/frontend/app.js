require('./bootstrap');
require('./main.js');

window.Vue = require('vue');

// component products
Vue.component('product-component', require('./components/ProductsComponent.vue'));
// component complements
Vue.component('complements-component', require('./components/ComplementsComponent.vue'));
// component tours
Vue.component('tour-component', require('./components/TourComponent.vue'));


const app = new Vue({
    el: '#product'
});
 