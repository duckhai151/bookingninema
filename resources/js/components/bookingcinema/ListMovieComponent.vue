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
									PHIM SẮP CHIẾU
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
									PHIM ĐANG CHIẾU
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">
									SUẤT CHIẾU ĐẶC BIỆT
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="w3l-populohny-grids">
					<div class="item vhny-grid" v-for="movie in movies">
						<div class="box16">
                            <router-link :to="{ name: 'detail-movie', params: { id: movie.id }}">
                                <figure>
                                    <img class="img-fluid" src="cinema/images/m4.jpg" alt="">
                                </figure>

                                <span class="fa fa-play video-icon" aria-hidden="true"></span>
                            </router-link>
						</div>
						<h3> <a href="genre.html">{{ movie.name }}</a></h3>
						<p style="font-size: 15px;"><span style="font-weight: bold; color: black;">Time:</span> {{ movie.running_time }}</p>
						<p style="font-size: 15px;"><span style="font-weight: bold; color: black;">Category:</span> Action</p>
						<div class="button-center text-center mt-4">
							<a href="genre.html" class="btn btn-info watch-button" data-toggle="modal" data-target=".bd-example-modal-lg">Booking Now</a>
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
                    <h5 class="modal-title" id="exampleModalLabel">Toys Story 4</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    	<span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h3 style="text-align:center;">NDK Cinema</h3>
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#menu0">
                            <span style="font-size: 38px; color: black;">16</span><span style="font-size: 20px; color: black;">/09 - T5</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#menu1">
                            <span style="font-size: 38px; color: black;">16</span><span style="font-size: 20px; color: black;">/09 - T5</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#menu2">
                            <span style="font-size: 38px; color: black;">16</span><span style="font-size: 20px; color: black;">/09 - T5</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#menu2">
                            <span style="font-size: 38px; color: black;">16</span><span style="font-size: 20px; color: black;">/09 - T5</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#menu2">
                            <span style="font-size: 38px; color: black;">16</span><span style="font-size: 20px; color: black;">/09 - T5</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#menu2">
                            <span style="font-size: 38px; color: black;">16</span><span style="font-size: 20px; color: black;">/09 - T5</span>
                        </a>
                    </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                    <div class="tab-pane container active" id="menu0">
                        <a class="btn btn-secondary">10:00</a>
                        <a class="btn btn-secondary">11:00</a>
                        <a class="btn btn-secondary">12:30</a>
                    </div>
                    <div class="tab-pane container fade" id="menu1">...</div>
                    <div class="tab-pane container fade" id="menu2">...</div>
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
            movies: [],
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
        }
    },
}
</script>

<style>

</style>
