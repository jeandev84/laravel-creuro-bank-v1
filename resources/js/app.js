require('./bootstrap');


import * as Vue from 'vue'


Vue.component('app', require('./components/App').default)

const app = new Vue({
    el: '#app',
})
