window.Vue = require('vue');

import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
    state: {
        BASE_URL: "http://bucketlist.api/",
        isLoggedIn: !!localStorage.getItem('token'),
        token: localStorage.getItem('token'),
        darkNav: false
    },
    getters: {
        base_url: state => state.BASE_URL,
        isLoggedIn: state => state.isLoggedIn,
        darkNav: state => state.darkNav
    },
    mutations: {
        LoginUser (state, data) {
            state.isLoggedIn = true;
            let token = data.access_token;
            state.token = token;
            localStorage.setItem('token', token)
        },
        LogoutUser (state) {
            state.isLoggedIn = false;
            state.token = localStorage.removeItem('token')
        },
        tokenStored (state) {
            state.token = localStorage.getItem('token')
        }
    }
})
