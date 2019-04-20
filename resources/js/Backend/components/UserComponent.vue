<template>
    <tr>
        <td>{{ user.id }}</td>
        <td>
            <input v-if="editstatus" type="text" class="form-control" v-model="user.name">
            {{ user.name }}
        </td>
        <td>
            <input v-if="editstatus" type="text" class="form-control" v-model="user.email">
            {{ user.email}}
        </td>
        <td v-if="editstatus">
            <input placeholder="password" type="password" class="form-control" v-model="user.password">
        </td>
        <td>
            <button v-if="editstatus" class="btn btn-success" v-on:click="onClickUpdate()">
                Guardar
            </button>
            <button type="button" class="btn btn-primary" @click="onClickEdit()">Editar</button>
            <button type="submit" class="btn btn-danger"  @click="onclickDelete()">Eliminar</button>
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
        		const params = {
        			name: this.user.name,
        			email: this.user.email,
                    password: this.user.password
        		};
        		axios.put('/admin/users/'+this.user.id, params).then((response) => {
        			this.editstatus = false,
        			this.user = response.data;
        			this.$emit('update', user);
        		});
        	}
        }
    }
</script>