require('./bootstrap');

import Vue from 'vue';
import App from './vue/app.vue';

import '@fortawesome/fontawesome-free/css/all.css';
import '@fortawesome/fontawesome-free/js/all.js'

const app = new Vue({
  el: '#app',
  components:{ App }
})
