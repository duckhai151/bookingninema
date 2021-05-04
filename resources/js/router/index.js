import Vue from 'vue'
import VueRouter from 'vue-router'
import Master from '../components/layouts/MasterComponent'
import Home from '../components/bookingcinema/HomeComponent'
import Seat from '../components/bookingcinema/SeatComponent'
import DetailMovie from '../components/bookingcinema/DetailMovieComponent'

Vue.use(VueRouter);

const routes = [
    {
        path: '/',
        component: Master,
        children: [
            {
                path: '/',
                component: Home,
            },
            {
                path: '/seat',
                component: Seat,
            },
            {
                path:  '/movie/:id',
                component: DetailMovie,
                name: 'detail-movie',
            },
        ]
    },
];

const router = new VueRouter({
    routes,
    mode: 'history'
});

export default router;

