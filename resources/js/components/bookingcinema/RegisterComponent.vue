<template>
    <div class="container">
        <div class="row py-5 mt-4 align-items-center">
            <div class="col-md-5 pr-lg-5 mb-5 mb-md-0">
                <img src="https://res.cloudinary.com/mhmd/image/upload/v1569543678/form_d9sh6m.svg" alt="" class="img-fluid mb-3 d-none d-md-block">
                <h1>Đăng kí Tài khoản</h1>
            </div>

            <div class="col-md-7 col-lg-6 ml-auto">
                <form action="#">
                    <div class="row">
                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-envelope text-muted"></i>
                            </span>
                            </div>
                            <input v-model="email" id="email" type="email" name="email" placeholder="Địa chỉ Email" class="form-control bg-white border-left-0 border-md">
                        </div>

                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-lock text-muted"></i>
                            </span>
                            </div>
                            <input v-model="password" id="password" type="password" name="password" placeholder="Mật khẩu" class="form-control bg-white border-left-0 border-md">
                        </div>

                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-user text-muted"></i>
                            </span>
                            </div>
                            <input v-model="name" id="name" type="text" name="name" placeholder="Họ và tên" class="form-control bg-white border-left-0 border-md">
                        </div>

<!--                        <div class="input-group col-lg-12 mb-4">-->
<!--                            <div class="input-group-prepend">-->
<!--                            <span class="input-group-text bg-white px-4 border-md border-right-0">-->
<!--                                <i class="fa fa-user text-muted"></i>-->
<!--                            </span>-->
<!--                            </div>-->
<!--                            <input v-model="sex" id="sex" type="text" name="sex" placeholder="Họ và tên" class="form-control bg-white border-left-0 border-md">-->
<!--                        </div>-->

                        <!-- Job -->
                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-black-tie text-muted"></i>
                            </span>
                            </div>
                            <select v-model="sex" id="job" name="jobtitle" class="form-control custom-select bg-white border-left-0 border-md">
                                <option value="">Chọn giới tính</option>
                                <option value="Nam">Nam</option>
                                <option value="Nữ">Nữ</option>
                            </select>
                        </div>

                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-user text-muted"></i>
                            </span>
                            </div>
                            <input v-model="address" id="address" type="text" name="address" placeholder="Địa chỉ" class="form-control bg-white border-left-0 border-md">
                        </div>

                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-user text-muted"></i>
                            </span>
                            </div>
                            <input v-model="birthday" id="birthday" type="date" name="birthday" placeholder="Ngày sinh" class="form-control bg-white border-left-0 border-md">
                        </div>

                        <div class="input-group col-lg-12 mb-4">
                            <div class="input-group-prepend">
                            <span class="input-group-text bg-white px-4 border-md border-right-0">
                                <i class="fa fa-phone-square text-muted"></i>
                            </span>
                            </div>
                            <input v-model="phone" id="phoneNumber" type="tel" name="phone" placeholder="Số điện thoại" class="form-control bg-white border-md border-left-0 pl-3">
                        </div>.

                        <div class="form-group col-lg-12 mx-auto mb-0">
                            <a v-on:click="register()" class="btn btn-primary btn-block py-2">
                                <span class="font-weight-bold">Đăng kí</span>
                            </a>
                        </div>

                        <div class="text-center w-100">
                            <p class="text-muted font-weight-bold">Bạn đã có tài khoản ? <router-link tag="a" :to="{name: 'login'}" class="text-primary ml-2">Đăng nhập</router-link></p>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "RegisterComponent",
    data() {
        return {
            email: '',
            password: '',
            name : '',
            sex : '',
            address : '',
            birthday : '',
            phone : '',
        }
    },
    methods: {
        register() {
            axios.post('register', {
                email: this.email,
                password: this.password,
                name : this.name,
                sex: this.sex,
                address : this.address,
                birthday : this.birthday,
                phone : this.phone,
            }).then(res => {
                this.$router.push({path: '/login'});
            });
        }
    }
}
</script>

<style scoped>

</style>
