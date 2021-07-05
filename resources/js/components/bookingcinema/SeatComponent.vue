<template>
<div class="container" style="margin-top:70px;">
	<div class="row">
		<div class="col-md-8">
			<div class="main">
			<h2></h2>
			<div class="demo">
				<div id="seat-map">
				<div class="seatCharts-container">
					<div class="front">MÀN HÌNH</div>
					<div class="seatCharts-row">
						<div v-for="(seat, index) in this.seats" role="checkbox" class="seatCharts-seat seatCharts-cell"
                             v-on:click="choseSeat(index)" :class="getStatusSeat(index)">{{ seat.name }}
                        </div>
					</div>
				</div>
				</div>

				<div style="clear:both"></div>
			</div>
		    </div>
		</div>
		<div class="col-md-4">
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
					<li>: {{ this.movie.name }}</li>
					<li>: {{ this.movie.running_time }}</li>
					<li>: {{ this.showtime.time_showtime }}</li>
					<li>: {{ this.showtime.date_showtime }}</li>
                    <li>: {{ this.listSeatName.join(', ') }}</li>
					<li>: <b><span id="total">{{ this.price}}</span> VNĐ</b></li>
				</ul>
				<div class="clear"></div>
				<ul id="selected-seats" class="scrollbar scrollbar1"></ul>

				<button v-on:click="bookCinema()" class="checkout-button">Đặt ngay</button>
				<div id="legend"></div>
				</div>
		</div>
	</div>
</div>
</template>

<script>
export default {
    data() {
        return {
            seats: [],
            price: 0,
            movie: '',
            showtime: '',
            listSeatChose : [],
            listSeatName : [],
        }
    },
    created() {
        this.getShowtime(this.$route.params.showtimeId);
        this.getMovie(this.$route.params.movieId);
        this.getSeat(this.$route.params.showtimeId, this.$route.params.roomId);
    },
    methods: {
        getSeat(showtimeId, roomId) {
            axios.get('seat', {
                params: {
                    showtimeId: showtimeId,
                    roomId: roomId,
                }
            }).then(res => {
                this.seats = res.data;
                console.log(this.seats);
            });
        },
        getMovie(movieId) {
            axios.get(`movie/${movieId}`).then(res => {
                this.movie = res.data.movie;
            });
        },
        getShowtime(showtimeId) {
            axios.get(`showtime/${showtimeId}`).then(res => {
                this.showtime = res.data.showtime;
            });
        },
        choseSeat(seatIndex) {
            let status = this.seats[seatIndex].seat_status.status;
            if (status == 0) {
                this.seats[seatIndex].seat_status.status = 2;
                this.listSeatChose.push(this.seats[seatIndex].id);
                this.listSeatName.push(this.seats[seatIndex].name);
                this.price += this.seats[seatIndex].type.price.price;
            } else if (status == 2) {
                this.seats[seatIndex].seat_status.status = 0;
                let index = this.listSeatChose.indexOf(this.seats[seatIndex].id);
                if (index > -1) {
                    this.listSeatChose.splice(index, 1);
                    this.listSeatName.splice(index, 1);
                    this.price -= this.seats[seatIndex].type.price.price;
                }
            }
        },
        getStatusSeat(seatIndex) {
            let status = this.seats[seatIndex].seat_status.status;
            switch(status) {
                case 0:
                    return 'available';
                case 1:
                    return 'unavailable';
                case 2:
                    return 'selected';
            }
        },
        bookCinema() {
            let listBooking = {
                'seat' : this.listSeatChose,
                'movieName' : this.movie.name,
                'date' : this.showtime.date_showtime,
                'time' : this.showtime.time_showtime,
            };
            localStorage.setItem("listBooking", JSON.stringify(listBooking));
            let test = JSON.parse(localStorage.getItem('listBooking'));
            console.log(test);
            this.$router.push({path: '/confirm'});
        }
    }
}
</script>

<style>

</style>
