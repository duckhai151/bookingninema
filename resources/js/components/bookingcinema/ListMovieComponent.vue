<template>
  	<!--grids-sec1-->
	<section class="w3l-grids">
		<div class="grids-main py-5">
			<div class="container py-lg-3">
				<div class="headerhny-title">
					<div class="w3l-title-grids">
						<ul class="nav nav-tabs" id="myTab" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                                    PHIM ĐANG CHIẾU
								</a>
							</li>
<!--							<li class="nav-item">-->
<!--								<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">-->
<!--									PHIM ĐANG CHIẾU-->
<!--								</a>-->
<!--							</li>-->
						</ul>
					</div>
				</div>
				<div class="w3l-populohny-grids">
					<div class="item vhny-grid" v-for="movie in movies">
						<div class="box16">
                            <router-link :to="{ name: 'detail-movie', params: { id: movie.id }}">
                                <figure>
                                    <img style="height: 370px;" v-if="movie.image != ''" class="img-fluid" :src="'cinema/movies/' + movie.image" alt="">
                                    <img style="height: 370px;" v-else class="img-fluid" src="cinema/movies/default.jpg" alt="">
                                </figure>

                                <span class="fa fa-play video-icon" aria-hidden="true"></span>
                            </router-link>
						</div>
                        <h3><router-link :to="{ name: 'detail-movie', params: { id: movie.id }}">{{ movie.name }}</router-link></h3>
						<p style="font-size: 15px;"><span style="font-weight: bold; color: black;">Thời gian:</span> {{ movie.running_time }} phút</p>
						<p style="font-size: 15px;"><span style="font-weight: bold; color: black;">Thể loại:</span> Hành động</p>
						<div class="button-center text-center mt-4">
							<a href="genre.html" v-on:click="getShowtime(movie.id)" class="btn btn-info watch-button" data-toggle="modal" data-target=".bd-example-modal-lg">Đặt vé ngay</a>
						</div>
					</div>
				</div>
			</div>
		</div>

        <!-- Modal -->
        <div id="small-dialog2" class="zoom-anim-dialog mfp-hide">
            <iframe src="https://player.vimeo.com/video/358205676" allow="autoplay; fullscreen"
                allowfullscreen=""></iframe>
        </div>
        <div style="margin-top: 200px;" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{ movieName }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    	<span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ul class="nav nav-tabs">
                        <li class="nav-item" v-for="(showtime, name, index) in this.showtimes">
                            <a v-if="index == 0" class="nav-link active" data-toggle="tab" :href="'#menu' + index">
                                <span style="font-size: 30px; color: black;">{{ name }}</span>
                            </a>
                            <a v-else class="nav-link" data-toggle="tab" :href="'#menu' + index">
                                <span style="font-size: 30px; color: black;">{{ name }}</span>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div v-for="(showtime, name, index) in this.showtimes" v-if="index == 0" class="tab-pane container active" :id="'menu'+index">
                            <router-link v-for="show in showtime" v-bind:key="show.id"
                                         :to="{name: 'booking-movie',
                                         params: {
                                             showtimeId: show.id,
                                             roomId: show.room_id,
                                             movieId: show.movie_id,
                                         }}"
                                         data-dismiss="modal" tag="a" class="btn btn-secondary">{{ show.time_showtime }}
                            </router-link>
                        </div>
                        <div v-else class="tab-pane container fade" :id="'menu'+index">
                            <router-link v-for="show in showtime" v-bind:key="show.id"
                                         :to="{
                                            name: 'booking-movie',
                                            params: {
                                                showtimeId: show.id,
                                                roomId: show.room_id,
                                                movieId: show.movie_id,
                                            }}"
                                         data-dismiss="modal" tag="a" class="btn btn-secondary">{{ show.time_showtime }}
                            </router-link>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
	</section>
	<!--//grids-sec1-->
</template>

<script>
export default {
    data() {
        return {
            movieName: '',
            movies: [],
            showtimes: [],
        }
    },
    created() {
        this.listMovie();
    },
    methods: {
        listMovie() {
            axios.get('movie').then(res => {
                this.movies = res.data.movies;
            });
        },
        getShowtime(movieId) {
            this.movieName = this.movies.find(x => x.id == movieId).name;
            axios.get('showtime', {
                params: {
                    movieId: movieId
                }
            }).then(res => {
                this.showtimes = res.data;
            });
        },
    },
}
</script>

<style>

</style>
