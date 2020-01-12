/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
import VueRouter from 'vue-router';
import App from './App.vue';
import Index from './components/IndexComponent.vue';
import Register from './components/auth/RegisterComponent.vue';
import Login from './components/auth/LoginComponent.vue';
import Home from './components/HomeComponent.vue';
import store from './store';


require('./bootstrap');

window.Vue = require('vue');

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('bucketlist-component', require('./components/BucketListComponent.vue').default);

Vue.use(VueRouter);
const router = new VueRouter({
    mode: 'history',
    routes: [
    {
        path: '/',
        name: 'index',
        component: Index
    },{
        path: '/home',
        name: 'home',
        component: Home,
        meta: {
            requiresAuth: true
        }
    },{
        path: '/login',
        name: 'login',
        component: Login,
        meta: {
            auth: false
        }
    },{
        path: '/register',
        name: 'register',
        component: Register,
        meta: {
            auth: false
        }
    }

    ]
});


router.beforeEach((to, from, next) => {

    // check if the route requires authentication and user is not logged in
    if (to.matched.some(route => route.meta.requiresAuth) && !store.state.isLoggedIn) {
        // redirect to login page
        next({ name: 'login' })
        return
    }

    // if logged in redirect to dashboard
    if(to.path === '/login' && store.state.isLoggedIn) {
        next({ name: 'home' })
        return
    }

    if(to.path === '/'){
        store.state.darkNav = true;
    }

    next()
});

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router,
    store,
    render: h => h(App)
})
