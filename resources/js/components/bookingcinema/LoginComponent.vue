<template>
    <div class="container">
        <div class="row py-5 mt-4 align-items-center">
            <!-- For Demo Purpose -->
            <div class="col-md-5">
                <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.dasym.com%2Ffuture-cinema-experience%2F&psig=AOvVaw3cf3Q100U3_HRaHHLNKH5L&ust=1622218296969000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCKiAkZ6g6vACFQAAAAAdAAAAABAD" alt="" class="img-fluid mb-3 d-none d-md-block">
                <h1>Đăng nhập</h1>
            </div>

            <!-- Registeration Form -->
            <div class="col-md-7">
                <form action="#">
                    <div class="row">
<!--                        <div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">-->
<!--                            <div class="border-bottom w-100 ml-5"></div>-->
<!--&lt;!&ndash;                            <span class="px-2 small text-muted font-weight-bold text-muted"></span>&ndash;&gt;-->
<!--                            <div class="border-bottom w-100 mr-5"></div>-->
<!--                        </div>-->
                        <!-- Email Address -->
                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-envelope text-muted"></i>
                            </span>
                            </div>
                            <input v-model="email" id="email" type="email" name="email" placeholder="Email Address" class="form-control bg-white border-left-0 border-md">
                        </div>

                        <!-- Password -->
                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-lock text-muted"></i>
                            </span>
                            </div>
                            <input v-model="password" id="password" type="password" name="password" placeholder="Password" class="form-control bg-white border-left-0 border-md">
                        </div>

                        <!-- Submit Button -->
                        <div class="form-group col-lg-12 mx-auto mb-0">
                            <a v-on:click="login()" class="btn btn-primary btn-block py-2">
                                <span class="font-weight-bold">Đăng nhập</span>
                            </a>
                        </div>

                        <!-- Divider Text -->
<!--                        <div class="form-group col-lg-12 mx-auto d-flex align-items-center my-4">-->
<!--                            <div class="border-bottom w-100 ml-5"></div>-->
<!--                            <span class="px-2 small text-muted font-weight-bold text-muted">OR</span>-->
<!--                            <div class="border-bottom w-100 mr-5"></div>-->
<!--                        </div>-->

<!--                        &lt;!&ndash; Social Login &ndash;&gt;-->
<!--                        <div class="form-group col-lg-12 mx-auto">-->
<!--                            <a href="#" class="btn btn-primary btn-block py-2 btn-facebook">-->
<!--                                <i class="fa fa-facebook-f mr-2"></i>-->
<!--                                <span class="font-weight-bold">Continue with Facebook</span>-->
<!--                            </a>-->
<!--                            <a href="#" class="btn btn-primary btn-block py-2 btn-twitter">-->
<!--                                <i class="fa fa-twitter mr-2"></i>-->
<!--                                <span class="font-weight-bold">Continue with Twitter</span>-->
<!--                            </a>-->
<!--                        </div>-->

                        <!-- Already Registered -->
                        <div class="text-center w-100">
                            <p class="text-muted font-weight-bold">Bạn chưa có tài khoản? <router-link tag="a" :to="{name: 'register'}" class="text-primary ml-2">Đăng kí</router-link></p>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "LoginComponent",
    data() {
        return {
            email: '',
            password: '',
        }
    },
    methods: {
        login() {
            axios.post('login', {
                email: this.email,
                password: this.password
            }).then(res => {
                localStorage.setItem("token", res.data.token);
                localStorage.setItem("user", res.data.user);
                this.$router.push({path: '/'});
            });
        }
    }
}
</script>

<style scoped>

</style>
