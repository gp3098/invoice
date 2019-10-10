<template>
  <div class="panel panel-defalut">
    <div class="panel-heading">{{title}}</div>
    <div class="panel-body">
      <form class="form" @submit.prevent="save">
        <div class="row">
          <div class="form-group">
            <label>Company</label>
            <input type="text" class="form-control" v-model="form.company" />
            <small class="text-danger" v-if="errors.company">{{errors.company[0]}}</small>
          </div>
          <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" v-model="form.name" />
            <small class="text-danger" v-if="errors.name">{{errors.name[0]}}</small>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label>Email Adderss</label>
            <input type="text" class="form-control" v-model="form.email" />
            <small class="text-danger" v-if="errors.email">{{errors.email[0]}}</small>
          </div>
          <div class="form-group">
            <label>Phone Number</label>
            <input type="text" class="form-control" v-model="form.phone" />
            <small class="text-danger" v-if="errors.phone">{{errors.phone[0]}}</small>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label>Address</label>
            <textarea type="text" class="form-control" v-model="form.address"></textarea>
            <small class="text-danger" v-if="errors.address">{{errors.address[0]}}</small>
          </div>
        </div>
        <button class="btn btn-success">Save</button>
      </form>
    </div>
  </div>
</template>
<script>
// import DataViewer from '../../components/DataViewer.vue'
import Vue from 'vue'
import axios from 'axios'
export default {
    name: 'customerForm',
    data() {
        return {
        	title:'Create',
        	errors:{},
        	option:{},
        	initialize:'/api/customer/create',
        	redirect:'/',
        	store:'/api/customer',
        	method:'put'
        }
    },
    beforeMount() {
        this.fetchData()
    },
    watch:{
    	'$route','fetchData'
    },
    methods: {
        fetchData() {
        	var vm = this
            axios.get(this.initialize)
                .then(function(response) {
                    Vue.set(vm.$data, 'form', response.data.form)
                    Vue.set(vm.$data,'option',response.data.option)
                })
                .catch(function(error){
                	console.log(error)
                })
        }
    }
}

</script>
