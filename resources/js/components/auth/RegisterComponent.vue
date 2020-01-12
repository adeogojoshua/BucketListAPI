<template>
    <div class="section  section-signup mt-4">
    <br/><br/>
    <div class="">
        <div class="container">
            <div class="row">
                <form method="POST" action="#">
                    <div class="col-md-4 col-md-offset-4 text-center">
                            <h2 class="text-white">Register</h2>

                            <div class="separator separator-danger">✻</div>

                            <div class="form-group">
                                <input id="username" placeholder="Username" type="text" class="form-control form-control-plain" name="username" value="" required autocomplete="username" autofocus>
                            </div>
                            <div class="form-group">
                                <input id="email" placeholder="Email" type="email" class="form-control form-control-plain" name="email" value="" required autocomplete="email">
                            </div>
                            <div class="form-group">
                                <input id="password" placeholder="Password" type="password" class="form-control form-control-plain" name="password" required autocomplete="new-password">
                            </div>
                            <div class="form-group">
                                <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control form-control-plain" name="password_confirmation" required autocomplete="new-password">
                            </div>
                            <!-- <p>
                                By signing up you agree to
                                <a href="signup.html">
                                    <span class="text-danger">
                                        Terms of Service
                                    </span>
                                </a> and
                                <a href="signup.html">
                                    <span class="text-danger" >
                                        Privacy Policy
                                    </span>
                                </a>
                            </p> -->
                            <div class="button-signin">
                                <button class="btn btn-danger btn-round btn-fill btn-wd">
                                    Sign Up
                                </button>
                                <router-link class="btn btn-danger btn-round btn-outline btn-wd" :to="{ name: 'login' }">
                                    Login
                                </router-link>
                            </div>
                            <!-- <p>
                                Or use an existing <router-link :to="{ name: 'login' }">Login</router-link>.
                            </p> -->
                        </div>

                </form>
            </div>
        </div>
    </div>
    </div>

</template>

<script>
export default {

}
</script>

<style>

</style>
