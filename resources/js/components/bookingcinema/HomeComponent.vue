<template>
  <div>
    <slide-header-component></slide-header-component>
    <list-movie-component></list-movie-component>
    <slide-footer-component></slide-footer-component>
  </div>
</template>

<script>
import SlideHeader from '../bookingcinema/SlideHeaderComponent'
import SlideFooter from '../bookingcinema/SlideFooterComponent'
import ListMovie from '../bookingcinema/ListMovieComponent'
export default {
    components: {
		'slide-header-component' : SlideHeader,
		'slide-footer-component' : SlideFooter,
		'list-movie-component' : ListMovie,
    }
}
</script>

<style>

</style>