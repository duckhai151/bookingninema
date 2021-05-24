import Vue from 'vue'
import axios from 'axios'
import VueAxios from 'vue-axios'

const AxiosApi = Vue.use(VueAxios, axios)

axios.defaults.baseURL = 'https://localhost:8011/api/';
// axios.defaults.headers.common['Authorization'] = localStorage.getItem('token');

export default AxiosApi

