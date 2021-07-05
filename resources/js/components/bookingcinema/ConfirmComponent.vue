<template>
    <div class="container" style="margin-top:70px;">
        <h2>Đặt vé</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="booking-details">
                    <ul class="book-left">
                        <li>Họ và tên </li>
                        <li>Số điện thoại </li>
                        <li>Email </li>
                    </ul>
                    <ul class="book-right">
                        <li>: Nguyễn Đức Khải</li>
                        <li>: 0123456789</li>
                        <li>: duckhai151@gmail.com</li>
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
                        <li>Giờ chiếu </li>
                        <li>Ngày chiếu </li>
                        <li>Ghế đã chọn</li>
                        <li>Tổng tiền</li>
                    </ul>
                    <ul class="book-right">
                        <li>: Ròm</li>
                        <li>: 90</li>
                        <li>: 20:00</li>
                        <li>: 19/5</li>
                        <li>: A4, A5</li>
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
    name: "BookingComponent"
}
</script>

<style scoped>

</style>
