import Vue from 'vue'
import VueRouter from 'vue-router'


import AppComponent from '../components/cardapio/AppComponent'
import Categorias from '../components/cardapio/models/categorias/Categorias'


Vue.use(VueRouter)

const routes = [
    {
        path: '/cardapio/app',
        component: Categorias,
        children: [
            
          
           

        ],

    },
   


]

const router = new VueRouter({
    mode: 'history',
    routes
})

export default router