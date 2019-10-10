<template>	
	<data-viewer :source="source" :thead="thead" :filter="filter" :create="create" :title="title>"
		<template slot-scope="props">
			<tr @click="$router.push('/customer/'+props.item.id)">
				<td>{{props.item.id}} </td>
				<td>{{props.item.company}} </td>
				<td>{{props.item.name}} </td>
				<td>{{props.item.email}} </td>
				<td>{{props.item.create_at}} </td>
			</tr>
		</template>
	</data-viewer>
</template>
<script>
	// import DataViewer from '../../components/DataViewer.vue'

	export default{
		name:'CustomerIndex',
		data(){
			return{
				title:'Customers',
				source:'/api/customers',
				create:'/customer/create',
				thead:[
					{title:'ID',key:'id',sort:true},
					{title:'Company',key:'company',sort:true},
					{title:'Name',key:'name',sort:true},
					{title:'Email Address',key:'email',sort:true},

				]
			}
		}
	}
</script>