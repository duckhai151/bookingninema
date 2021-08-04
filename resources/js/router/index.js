import Vue from 'vue'
import VueRouter from 'vue-router'
import Master from '../components/layouts/MasterComponent'
import Home from '../components/bookingcinema/HomeComponent'
import Seat from '../components/bookingcinema/SeatComponent'
import DetailMovie from '../components/bookingcinema/DetailMovieComponent'
import Login from '../components/bookingcinema/LoginComponent'
import Register from '../components/bookingcinema/RegisterComponent'
import Confirm from '../components/bookingcinema/ConfirmComponent'
import Finish from '../components/bookingcinema/FinishComponent'

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
                path: '/book',
                name: 'booking-movie',
                component: Seat,
            },
            {
                path:  '/movie/:id',
                component: DetailMovie,
                name: 'detail-movie',
            },
            {
                path:  '/login',
                component: Login,
                name: 'login',
            },
            {
                path:  '/register',
                component: Register,
                name: 'register',
            },
            {
                path:  '/confirm',
                component: Confirm,
                name: 'confirm',
            },
            {
                path:  '/finish',
                component: Finish,
                name: 'confirm',
            },
        ]
    },
];

const router = new VueRouter({
    routes,
    mode: 'history'
});

export default router;

