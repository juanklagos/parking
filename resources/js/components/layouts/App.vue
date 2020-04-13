<template>
    <div>
        <div v-if="$auth.ready()">
            <Navbar v-if="$route.name != 'invoice'"></Navbar>
            <main class="py-4">
                <router-view></router-view>
            </main>
        </div>
        <div v-if="!$auth.ready()">
            Sitio Cargando...
        </div>
    </div>
</template>

<script>
    import Navbar from "../partials/Navbar";

    export default {
        name: "App",
        components: {Navbar}
    }
</script>

<style scoped>

</style>
