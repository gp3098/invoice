import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

const router = new VueRouter({
    routes: [
        {path: '/', components: require('./views/customer/index.vue')},
        {path: '/customer/create', components: require('./views/customer/form.vue')},
        {path: '/customer/:id/edit', components: require('./views/customer/form.vue'), meta: {mode: 'edit'}},
        {path: '/customer/:id', components: require('./views/customer/show.vue')},

        {path: '/invoice', components: require('./views/invoice/index.vue')},
        {path: '/invoice/create', components: require('./views/invoice/form.vue')},
        {path: '/invoice/:id/edit', components: require('./views/invoice/form.vue'), meta: {mode: 'edit'}},
        {path: '/invoice/:id', components: require('./views/invoice/show.vue')},
    ]
})

export default router