require('./bootstrap');

window.Vue = require('vue');

import router from './router/index'
import AxiosApi from './axios'

export const app = new Vue({
    el: '#app',
    router,
    AxiosApi
});
