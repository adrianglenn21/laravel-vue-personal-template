<script setup>
import Layout from '../Layouts/Layout.vue';
// set the layout
defineOptions({ layout: Layout });
// accept the income props or values
defineProps({
    username: String
})
</script>

<template>
    <Head title=" | About" />
    <div>
        <h1>About page - {{ username }}</h1>
    </div>
</template>