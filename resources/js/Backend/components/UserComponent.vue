<template>
    <tr>
        <td>{{ user.id }}</td>
        <td>{{ user.name}}</td>
        <td>{{ user.email }}</td>
        <td>
            <button type="button" class="btn btn-primary">Editar</button>
            <button type="submit" class="btn btn-danger" v-on:click="onclickDelete()">Eliminar</button>
        </td>
    </tr>
</template>

<script>
    export default {
    	props: ['user'],
    	data() {
    		return {
    			editstatus:false
    		};
    	},
        mounted() {
            console.log('Component mounted.')
        },
        methods: {
        	onclickDelete(){
        		axios.delete('/admin/users/'+this.user.id).then(response =>	{
        			this.$emit('delete');
        		});
        	},
        	onClickEdit(){
        		this.editstatus = true;
        	},
        	onClickUpdate(){
        		const args = {
        			name: this.user.name,
        			email: this.user.email
        		};
        		axios.put('/admin/users/'+this.user.id, args).then((response) => {
        			this.editstatus = false,
        			this.user = response.data;
        			this.$emit('update', user);
        		});
        	}
        }
    }
</script>