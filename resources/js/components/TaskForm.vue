<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Task Form</div>

                    <div class="card-body">
                        <form action="./api/task" method="POST" @submit.prevent="addTask()">
                            <input type="text" name="first_name" v-model="first_name" placeholder="First Name" required>
                            <input type="text" name="last_name" v-model="last_name" placeholder="Last Name" required>
                            <input type="email" name="email" v-model="email" placeholder="Email" required>
                            <input type="text" name="phone" v-model="phone" placeholder="Phone" required>
                            <input type="submit" value="Add Contact">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                first_name: '',
                last_name: '',
                email: '',
                phone: ''
            }
        },

        mounted() {
            console.log('Component mounted.')
        },

        methods:{
            addTask(){
                axios.post('./api/task', {
                    first_name:this.first_name,
                    last_name:this.last_name,
                    email:this.email,
                    phone:this.phone
                });
                alert('OK!');
            }
        }
    }
</script>