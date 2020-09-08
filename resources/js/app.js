import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

 import store from './vuex/store'
require('./bootstrap');

window.Vue = require('vue');
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'

import router from './routes/index'

Vue.use(BootstrapVue)
Vue.use(IconsPlugin)




Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('app-cardapio', require('./components/cardapio/AppComponent').default);
Vue.component('app-home', require('./components/home/App').default);



const app = new Vue({
    router,
    store,
    el: '#app',
});
