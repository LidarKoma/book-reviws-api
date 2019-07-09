<template>
    <div>
        <h1>Vue Router Demo Appp</h1>

        <p>
            <router-link :to="{ name: 'example' }">example</router-link> |
            <router-link :to="{ name: 'example2' }">example2</router-link>
        </p>

        <div class="container">
            <router-view></router-view>
        </div>
    </div>
</template>
<script>
    export default {}
</script>