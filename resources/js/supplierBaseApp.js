import store from './store';
import VueLoading from 'vuejs-loading-plugin'


window.Vue = require('vue').default;

import Vuelidate from 'vuelidate'
Vue.use(Vuelidate)

Vue.use(VueLoading)

Vue.component('supplier-base-buy-modal', require('./components/supplierBase/supplierBase_BuyModal.vue').default);

const app = new Vue({
    el: '#app',
    store
});
