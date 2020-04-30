import Vue from 'vue';
import VueRouter from 'vue-router';
import Dashboard from './views/Dashboard.vue';
import Home from "./views/Home.vue";
import Articles from './views/Articles.vue';
//import Clients from '/views/Clients.vue';
//import Categories from './views/Categories.vue';
//import Fournisseurs from './views/Fournisseurs.vue';
//import Commandes_Fournisseur from '/views/Commandes_Founisseur.vue';



Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/dashboard',
            name: 'dashboard',
            component: Dashboard
        },
        {
            path: '/dashboard/articles',
            name: 'articles',
            component: Articles
        },
        /* {
            path: '/dashboard/categorie',
            name: 'categorie',
            component: Categories
        }, 
        {
            path: '/dashboard/clients',
            name: 'clients',
            component: Clients
        },
      /*  {
            path: '/dashboard/fournisseurs',
            name: 'fournisseurs',
            component: Fournisseurs
        }, */
        
    ]
})


export default router;
         