<script setup>
import Layout from '../Layouts/Layout.vue';
import Card from '../Components/Card.vue';
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
        <Card header="Featured" title="Hello World" text="This is an example of a reusable Bootstrap card component." link="#" />
    </div>
</template>