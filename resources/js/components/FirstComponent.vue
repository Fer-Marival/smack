<template>
    <div class="graph-visual tables-main">
    <h2 class="inner-tittle">List Users</h2>
        <div class="graph">
            <div class="tables">                                        
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>email</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <user-component
                            v-for="(user, index) in user"
                            :key="user.id"
                            :user="user"
                            @update="updateUser(index, args)"
                            @delete="deleteUser(index)"
                        ></user-component>
                    </tbody>
                </table>
            </div>                              
        </div>
    </div>
</template>

<script>
    export default {
        data()  {
            return {
                user: []
            }
        },
        mounted() {
            axios.get('/admin/users').then((response) => {
                this.user = response.data;
            });
        },
        methods: {
            addUser(user){
                this.user.push(user)
            },
            updateUser(index){
                this.user[index] = user
            },
            deleteUser(index){
                this.user.splice(index, 1)
            }
        }
    }
</script>
