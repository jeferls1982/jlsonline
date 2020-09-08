import Vue from 'vue'
import Vuex from 'vuex'

import Categorias from './modules/categorias/categorias'
Vue.use(Vuex)

const store = new Vuex.Store({
    modules:{
        Categorias
    }
})

export default store