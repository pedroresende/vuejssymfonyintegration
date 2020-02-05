import '../css/app.css';

import Vue from 'vue';
import vuefrontend from './../vue/vuefrontend';

if (document.getElementById('app') !== null) {
  new Vue({
    el: '#app',
    template: '<vuefrontend/>',
    components: {
        vuefrontend
    }
  })
}

console.log('Hello Webpack Encore! Edit me in assets/js/app.js');
