<template>
    <section class="w3l-grids">
        <div class="grids-main py-5">
            <div class="container py-lg-3">
                <h2>Nội dung phim </h2>
                <hr>
                <div class="row">
                    <div class="col-md-4">
<!--                        <img v-if="this.movie.image != ''" class="img-fluid" :src="'cinema/movies/' + this.movie.image" alt="">-->
                        <img v-if="this.movie.image != ''" class="img-fluid" :src="this.baseURl + '/cinema/movies/' + this.movie.image" alt="">
                        <img v-else="this.movie.image != ''" class="img-fluid" :src="this.baseURl + '/cinema/movies/' + this.movie.image" alt="">
                    </div>
                    <div class="col-md-8">
                        <h3>{{ this.movie.name }}</h3>
                        <hr>
                        <div class="row">
                            <div class="col-md-2">
                                <p>Đạo diễn: </p>
                                <p>Diễn viên: </p>
                                <p>Khởi chiếu: </p>
                                <p>Thời lượng: </p>
                                <p>Ngôn ngữ: </p>
                            </div>
                            <div class="col-md-10">
                                <p>{{ this.movie.director }}</p>
                                <p>{{ this.movie.cast }}</p>
                                <p>{{ this.movie.start_date }}</p>
                                <p>{{ this.movie.running_time }}</p>
                                <p>{{ this.movie.language }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <p class="text-left">{{ this.movie.description }}</p>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    data() {
        return {
            movie: '',
            baseUrl: '',
        }
    },
    created() {
        this.baseURl = window.location.origin;
        this.getMovie();
    },
    methods: {
        getMovie() {
            axios.get(`movie/${this.$route.params.id}`).then(res => {
                console.log(res.data.movie)
                this.movie = res.data.movie;
            })
        }
    }
}
</script>

<style scoped>

</style>
