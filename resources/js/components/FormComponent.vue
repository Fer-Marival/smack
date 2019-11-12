<template>
	<div class="outter-wp">
		<div class="forms-main">
			<form method="POST" class="form-horizontal" v-on:submit.prevent="newUser()">
				<div class="form-group">
					<label class="col-md-2 control-label">Name</label>
					<div class="col-md-8">
						<div class="input-group">							
							<span class="input-group-addon">
								<i class="glyphicon glyphicon-user"></i>
							</span>
							<input type="text" class="form-control1 icon" v-model="name" name="name" placeholder="Name">
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-2 control-label">Email Address</label>
					<div class="col-md-8">
						<div class="input-group">							
							<span class="input-group-addon">
								<i class="fa fa-envelope-o"></i>
							</span>
							<input type="text" class="form-control1 icon" v-model="email" name="email" placeholder="Email Address">
						</div>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-2 control-label">Password</label>
					<div class="col-md-8">
						<div class="input-group">
							<span class="input-group-addon">
								<i class="fa fa-key"></i>
							</span>
							<input type="password" class="form-control1 icon" v-model="password" name="password" id="exampleInputPassword1" placeholder="Password">
						</div>
					</div>
				</div>
				<button type="submit" class="btn btn-primary">
                    Add User
                </button>
			</form>
		</div>
	</div>
</template>

<script>
    export default {
    	data() {
    		return {
    			name: '',
    			email: '',
    			password: ''

    		}
    	},
        mounted() {
            console.log('component mounted');
        },
        methods: {
        	newUser() {
        		const params = {
	        		name: this.name,
	        		email: this.email,
	        		password: this.password
        		};
        		this.name = '';
        		this.email = '';
        		this.password = '';

        		axios.post("/admin/users", params).then((response) =>{
        			const user = response.data;
        			this.$emit("newUser", user);
        		});
        	}
        }
    }
</script>