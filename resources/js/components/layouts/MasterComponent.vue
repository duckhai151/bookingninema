<template>
    <div>
        <header-component></header-component>
        <router-view></router-view>
    </div>
</template>

<script>
import Header from '../layouts/HeaderComponent'
export default {
    components: {
        'header-component' : Header,
    }
}
</script>

<style>

</style>