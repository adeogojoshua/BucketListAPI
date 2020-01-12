<template>
    <div>
        <div class="section section-header">
            <div class="parallax filter filter-color-black">
                <div class="image" :style="background1"></div>
                <div class="container">
                    <div class="content">
                        <p><span>by </span>Creative Tim</p>
                        <h1>Home Page</h1>
                        <div class="separator-container">
                            <div class="separator line-separator">♦</div>
                        </div>
                        <h5>Present your company, clients and projects in a stylish way</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import store from "../store.js";

export default {
computed: {
        base_url: () => store.getters.base_url,
        background1: () => "background-image: url('" + `${store.getters.base_url}` + "img/background-main.jpg')" ,
        img: () => store.getters.base_url + 'img/favicon.png',
    }
}
</script>

<style>

</style>
