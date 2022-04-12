/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import { BootstrapVue } from 'bootstrap-vue'
Vue.use(BootstrapVue)

import Vue from 'vue';
import ElementUI from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';

Vue.use(ElementUI);
import lang from 'element-ui/lib/locale/lang/en'
import locale from 'element-ui/lib/locale'

// configure language
locale.use(lang)

import Element from 'element-ui'

Vue.use(Element)

// or
import {
    Select,
    Button
    // ...
} from 'element-ui'

Vue.component(Select.name, Select)
Vue.component(Button.name, Button)



import {store} from "./store/store";


window.Vue = require('vue').default;
import VueChatScroll from 'vue-chat-scroll'
Vue.use(VueChatScroll)


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('chats', require('./components/ChatsComponent.vue').default);
Vue.component('rooms', require('./components/RoomsComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    store,
    el: '#app',
});
