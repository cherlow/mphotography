/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import moment from 'moment';

Vue.filter('mydate', function(created) {
    return moment(created).format('MMMM Do YYYY');
});

import VueDisqus from 'vue-disqus'

Vue.use(VueDisqus);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));
Vue.component('blog', require('./components/BlogItems.vue'));
Vue.component('bloglist', require('./components/BlogList.vue'));
Vue.component('blogview', require('./components/BlogView.vue'));
Vue.component('login', require('./components/Login.vue'));
Vue.component('register', require('./components/Register.vue'));
Vue.component('notification', require('./components/Notifications.vue'));
Vue.component('instagram', require('./components/Instagram.vue'));
Vue.component('sblog', require('./components/Sblog.vue'));

const app = new Vue({
    el: '#app'
});
const pic = new Vue({
    el: '#pic'
});
const bilog = new Vue({
    el: '#bilog'
});
const appi = new Vue({
    el: '#appi'
});
