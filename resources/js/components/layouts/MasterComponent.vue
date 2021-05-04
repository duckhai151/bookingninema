<template>
    <div>
        <header-component></header-component>
        <router-view></router-view>
        <footer-component></footer-component>
    </div>
</template>

<script>
import Header from '../layouts/HeaderComponent'
import Footer from '../layouts/FooterComponent'
export default {
    components: {
        'header-component' : Header,
        'footer-component' : Footer,
    }
}
</script>

<style>

</style>