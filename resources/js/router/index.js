// questo è il file di configurazione del router

import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import Posts from '../pages/Posts.index.vue'

// qua inseriremo  le nostre rotte
const routes = [
    {
        path:'/posts',
        name: 'post.index',
        component: Posts
    },
    // {
    //     // path:'/posts',
    //     // name: 'post.index',
    //     // component: Posts
    // }
] 

// creiamo l istanza
const router = new VueRouter({
    mode:'history',
    routes: routes
})

// e la esportiamo
export default router