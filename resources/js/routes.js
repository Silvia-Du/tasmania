//importo vue

import Vue from 'vue';

// importte il router
import VueRouter from 'vue-router';

//gli dico di usarlo

Vue.use (VueRouter);

//importo i componenti per le rotte

import ShopComp from './components/pages/ShopComp';
import HomeComp from './components/pages/HomeComp';

const router = new VueRouter({
    mode: 'history',
    linkExactActiveClass: 'active',
    routes:[
        {
            path: '/',
            name: 'home',
            component: HomeComp
        },
        {
            path: '/shop',
            name: 'shop',
            component: ShopComp
        },

        // {
        //     // questa rotta deve stare in coda alle altre
        //     path: '*',
        //     component: Error404
        // },
    ]
});

// lo esporto per poterlo importare dentro front.js che inizializza vue
export default router;
