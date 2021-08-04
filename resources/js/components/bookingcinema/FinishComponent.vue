<template>
    <div class="container" style="margin-top:70px;">
        <h2>Đặt vé thành công</h2>
        <h3>Vui lòng kiểm tra thông tin dưới đây và qua email</h3>
        <div class="row">
            <div class="col-md-6">
                <div class="booking-details">
                    <ul class="book-left">
                        <li>Họ và tên </li>
                        <li>Số điện thoại </li>
                        <li>Email </li>
                    </ul>
                    <ul class="book-right">
                        <li>: {{ this.user.name }}</li>
                        <li>: {{ this.user.phone  }}</li>
                        <li>: {{ this.user.email }}</li>
                    </ul>
                    <div class="clear"></div>
                    <!--                    <button v-on:click="bookCinema()" class="checkout-button">Đặt ngay</button>-->
                    <div id="legend"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="booking-details">
                    <ul class="book-left">
                        <li>Phim </li>
                        <li>Thời gian </li>
                        <li>Ngày chiếu </li>
                        <li>Giờ chiếu </li>
                        <li>Ghế đã chọn</li>
                        <li>Tổng tiền</li>
                    </ul>
                    <ul class="book-right">
                        <li>: {{ this.listBooking.movieName }}</li>
                        <li>: {{ this.listBooking.movieTime  }}</li>
                        <li>: {{ this.listBooking.date }}</li>
                        <li>: {{ this.listBooking.time }}</li>
                        <li>: {{ this.listBooking.seatName.join(', ') }}</li>
                        <li>: 120000</li>
                    </ul>
                    <div class="clear"></div>
                    <ul id="selected-seats" class="scrollbar scrollbar1"></ul>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "BookingComponent",
    data() {
        return {
            listBooking: '',
            user: '',
        }
    },
    created() {
        this.getListBooking();
        this.getUserInfo();
    },
    methods: {
        getListBooking() {
            this.listBooking = JSON.parse(localStorage.getItem('listBooking'));
        },
        getUserInfo() {
            this.user = JSON.parse(localStorage.getItem('user'));
        },
        setUserInfo() {
            localStorage.setItem("userInfor", JSON.stringify(listBooking));
        }
    }
}
</script>

<style scoped>

</style>
