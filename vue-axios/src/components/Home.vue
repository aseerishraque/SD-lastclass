<template>
	<div>
		<h2>{{ msg }}</h2>
		<h2>Divisions</h2>
		<ul>
			<li v-for="division in divisions">{{ division.name }}</li>
		</ul>
		<button @click="fetchusers">Fetch</button>
	</div>
</template>
<script>
	export default {
	  name: 'Home',
	  data () {
	    return {
	      msg: 'This is Home Page',
	      divisions: []
	    }
	  },
	  methods : {
	  	fetchusers(){
	  		const baseURI = 'http://127.0.0.1:8000/api/v1/divisions'
		      this.$http.get(baseURI)
		      .then((result) => {
		      	console.log(result.data.data)
		        this.divisions = result.data.data
		      })
	  	}
	  }
	}
</script>
<style>
	
</style>