import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

const router  = new VueRouter({
	routes:[
		{path:'/',components:require('./views/customer/index.vue')},
		// {path:'/customer',components:require('./views/customer/show.vue')}
	]
})

export default router