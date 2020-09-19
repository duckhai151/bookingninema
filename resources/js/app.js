require('./bootstrap');

window.Vue = require('vue');

import router from './router/index'

export const app = new Vue({
    el: '#app',
    router,
});
