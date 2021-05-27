<template>
<div class="container" style="margin-top:70px;">
	<div class="row">
		<div class="col-md-8">
			<div class="main">
			<h2>Multiplex Theatre Showing Screen 1</h2>
			<div role="checkbox" class="seatCharts-seat seatCharts-cell focused">foc</div>
                <div role="checkbox" class="seatCharts-seat seatCharts-cell available">avai</div>
			<div role="checkbox" class="seatCharts-seat seatCharts-cell unavailable">uav</div>
			<div role="checkbox" class="seatCharts-seat seatCharts-cell selected">slc</div>
			<div class="demo">
				<div id="seat-map">
				<div class="seatCharts-container">
					<div class="front">SCREEN</div>
					<div class="seatCharts-row">
						<div v-for="seat in this.seats" role="checkbox" :class="'seatCharts-seat seatCharts-cell ' + ((seat.seat_status.status == 1) ? 'unavailable' : 'available')">
                            {{ seat.name }}
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
					<li>Movie </li>
					<li>Time </li>
					<li>Tickets</li>
					<li>Total</li>
					<li>Seats :</li>
				</ul>
				<ul class="book-right">
					<li>: Gingerclown</li>
					<li>: April 3, 21:00</li>
					<li>: <span id="counter">0</span></li>
					<li>: <b><i>$</i><span id="total">0</span></b></li>
				</ul>
				<div class="clear"></div>
				<ul id="selected-seats" class="scrollbar scrollbar1"></ul>

				<button class="checkout-button">Book Now</button>
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
        }
    },
    created() {
        console.log(this.$route.params);
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
                console.log(res.data);
                this.seats = res.data;
            });
        }
    }
}
</script>

<style>

</style>
