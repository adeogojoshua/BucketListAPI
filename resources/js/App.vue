<template>
    <div>

<!-- <nav class="navbar navbar-inverse navbar-fixed-top"> -->
<nav class="navbar navbar-primary navbar-transparent navbar-fixed-top" color-on-scroll="200">
        <!-- if you want to keep the navbar hidden you can add this class to the navbar "navbar-burger"-->
        <div class="container">
            <div class="navbar-header">
                <button id="menu-toggle" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar bar1"></span>
                    <span class="icon-bar bar2"></span>
                    <span class="icon-bar bar3"></span>
                </button>
                <router-link :to="{ name: 'index' }">
                    <img :src="img" width="30px" height="30px"/>
                </router-link>
                    <!-- <img src="{{ base_url }}/img/favicon.png" width="30px" height="30px"/> -->

            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right navbar-uppercase">
                    <li v-if="!isLoggedIn">
                        <router-link :to="{ name: 'register', params: { userId: 123 } }">Register</router-link>
                    </li>
                    <li v-if="!isLoggedIn">
                        <router-link :to="{ name: 'login' }">Login</router-link>
                    </li>

                    <li v-if="isLoggedIn">
                        <router-link :to="{ name: 'home' }">Home</router-link>
                    </li>
                    <!-- <li>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li> -->

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
    </nav>

        <!-- <nav>
            <div class="container">
                <div class="nav-wrapper">
                    <ul id="nav-mobile" class="left hide-on-med-and-down">
                        <li>
                            <router-link :to="{ name: 'home' }">{{ base_url }} Home</router-link>
                        </li>
                    </ul>
                    <ul id="nav-mobile2" class="right">
                        <li v-if="!this.$store.state.isLoggedIn">
                            <router-link :to="{ name: 'login' }">Login</router-link>
                        </li>

                        <li v-if="!this.$store.state.isLoggedIn">
                            <router-link :to="{ name: 'register' }">Register</router-link>
                        </li>
                        <li v-if="this.$store.state.isLoggedIn">
                            <a href="#" class="" @click="logout()">Logout</a>
                        </li>
                        <li>
                            <a href="https://www.google.com" target="_blank" class="github"><i class="fa fa-github"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav> -->
        <transition name="fade" mode="out-in">
            <router-view></router-view>
        </transition>
    </div>
</template>

<script>
import store from "./store.js";

export default {
computed: {
        base_url: () => store.getters.base_url,
        img: () => store.getters.base_url + '/img/favicon.png',
        isLoggedIn: () => store.getters.isLoggedIn,
    }
}

</script>

<style>

</style>
