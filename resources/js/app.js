require('./bootstrap');
import store from './store';
import VueLoading from 'vuejs-loading-plugin'

window.Vue = require('vue').default;

import Vuelidate from 'vuelidate'
Vue.use(Vuelidate)
// using default options
Vue.use(VueLoading)

Vue.component('Formstep', require('./components/modal/Formstep.vue').default);
Vue.component('Buy', require('./components/modal/Buy.vue').default);
Vue.component('Login', require('./components/modal/Login.vue').default);
Vue.component('buy-modal-opener', require('./components/home/BuyModalOpenButton.vue').default);
Vue.component('calories-calculator', require('./components/general/CaloriesCalculator.vue').default);

const app = new Vue({
    el: '#app',
    store
});


