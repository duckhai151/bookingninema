require('./bootstrap');

window.Vue = require('vue');

import router from './router/index'
import AxiosApi from './axios'
import store from './store/store'

export const app = new Vue({
    el: '#app',
    router,
    AxiosApi,
    store
});
