<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="alert alert-danger" role="alert" v-if="error">
                    Error en las credenciales
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="card">
                    <div class="card-header">Inicio de sesión</div>
                    <div class="card-body">
                        <form autocomplete="off" @submit.prevent="login">
                            <div class="form-group">
                                <label for="email">Correo electrónico</label>
                                <input type="email" v-model="email" class="form-control" id="email"
                                       placeholder="Correo electrónico">
                            </div>
                            <div class="form-group">
                                <label for="password">Contraseña</label>
                                <input type="password" class="form-control" id="password" placeholder="contraseña"
                                       v-model="password">
                            </div>
                            <button type="submit" class="btn btn-info">Iniciar sesión</button>
                        </form>
                    </div>


                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Login",
        data() {
            return {
                email: '',
                password: '',
                error: false,
                brandsFinal:''

            }
        },
        created() {
        },
        methods: {
           login(){
               var _this = this;
               _this.$auth.login({
                   params: {
                       email: _this.email,
                       password: _this.password
                   },
                   success: function () {

                   },
                   error: function (resp) {
                       _this.error = true;
                       _this.errors = resp.response.data.errors;
                   },
                   rememberMe: true,
                   redirect: '/home',
                   fetchUser: true,
               });
           }
        }
    }
</script>

<style scoped>

</style>
