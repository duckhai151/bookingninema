<template>
    <section class="w3l-grids">
        <div class="grids-main py-5">
            <div class="container py-lg-3">
                <h2>Nội dung phim </h2>
                <hr>
                <img class="img-fluid" src="" alt="">
                {{ $route.params.id }}
            </div>
        </div>
    </section>
</template>

<script>
export default {
    data() {
        return {
            movie: ''
        }
    },
    created() {
        this.getMovie();
    },
    methods: {
        getMovie() {
            axios.get(`movie/${this.$route.params.id}`).then(res => {
                console.log(res.data)
            })
        }
    }
}
</script>

<style scoped>

</style>
