<template>
    <div>
        <div class="section section-signin">

            <div class="image-container">
                <div class="filter filter-color-black"  style="background-image: url('../assets/img/header-9.jpeg')">
                    <div class="col-md-8 col-md-offset-1">
                        <!-- <div class="content">
                            <div class="title-area">
                                <h1 class="title-modern">BucketListAPI</h1>
                                <h3>A Restful API for a bucket list service</h3>
                            </div>

                            <h5 class="subtitle">First Feature</h5>
                            <p>Something Important
                            </p>
                            <h5 class="subtitle">Second Feature</h5>
                            <p>Something Important
                            </p>
                            <h5 class="subtitle">Third Feature</h5>
                            <p>Something Important
                            </p>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="form-container">
                <form method="POST" action="#" @submit.prevent="login()">
                    <div class="col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1 text-center">

                        <div class="title-area">
                            <h2>Login</h2>
                            <div class="separator separator-danger">✻</div>
                        </div>

                        <label><h4 class="text-gray">Your username</h4></label>
                        <div class="form-group">
                            <input id="username" v-model="username" type="text" class="form-control form-control-plain @error('username') is-invalid @enderror" name="username" value="" autocomplete="off" autofocus>
                        </div>

                        <label><h4 class="text-gray">Your password</h4></label>
                        <div class="form-group">
                            <input id="password" v-model="password" type="password" class="form-control form-control-plain @error('password') is-invalid @enderror" name="password" autocomplete="off" >
                        </div>

                        <!-- <div class="form-group">
                            <label><h4 class="text-gray">Remember Me</h4></label>
                            <input class="form-check-input form-control-plain" type="checkbox" name="remember" id="remember" >
                        </div> -->

                        <div class="footer">
                            <button class="btn btn-danger btn-round btn-fill btn-wd">
                                Login
                            </button>
                            <br/><br/>
                            <a class="btn btn-danger btn-round " href="#">
                                Forgot Password?
                            </a>
                            <p class="text-gray info">Don't have an account? <router-link :to="{ name: 'register' }">Register</router-link></p>
                        </div>
                    </div>
                </form>
            </div>
    </div>
    </div>
</template>


<script>
import store from "../../store.js";

let base_url = store.getters.base_url;
let login_url = '';
export default {
data() {
    return {
        username: '',
        password: '',
    }
},
methods: {
    login(){
        let username = this.username, password = this.password;
        if(username != '' && password != ''){
            fetch(url, {
                method: 'POST',
            })
            .then(res => res.json())
            .then(response => {
                console.log(response)
            }).catch(err => console.log(err));

        }else{
            alert('Empty Field(s)')
        }
    }
}

}

console.log(base_url);
</script>

<style>

</style>
