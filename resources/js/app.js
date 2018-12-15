import Vue from 'vue';
import Vuetify from 'vuetify'
import 'vuetify/dist/vuetify.min.css'
import 'material-design-icons-iconfont/dist/material-design-icons.css'
import 'font-awesome/css/font-awesome.min.css'

import axios from 'axios';
axios.defaults.headers.common["Content-Type"] = "application/json";
axios.defaults.headers.common["Accept"] = "application/json";
Vue.prototype.$http = axios;
require('./bootstrap');


import store from './store'

Vue.use(Vuetify, {
    iconfont: 'fa4'
});

import Notification from './components/Notification';
import Login from './components/Login';
import Comments from './components/Comments';
import NewComment from './components/NewComment';
import Articles from  './components/Articles';
import Pagination from './components/Pagination';
import Filter from './components/Filter';

new Vue ({
    el:"#app",
    store,
    components:{
        Notification,
        Login,
        Comments,
        NewComment,
        Articles,
        Pagination,
        "filter-articles":Filter
    }
});
