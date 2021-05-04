import Vue from 'vue'
import axios from 'axios'
import VueAxios from 'vue-axios'

const AxiosApi = Vue.use(VueAxios, axios)

axios.defaults.baseURL = 'http://127.0.0.1:8000/api/';
// axios.defaults.headers.common['Authorization'] = localStorage.getItem('token');

export default AxiosApi

