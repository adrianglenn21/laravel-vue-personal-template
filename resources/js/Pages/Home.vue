<script setup>
import Layout from '../Layouts/Layout.vue';
import Card from '../Components/Card.vue';

defineOptions({ layout: Layout });
defineProps({
    cardItems: Array,
});
</script>

<template>
    <Head title=" | Home" />
    <div class="px-4 pt-5 my-5 text-center border-bottom">
        <h1 class="display-4 fw-bold">Home</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi ac semper ipsum.
                In efficitur tristique turpis pellentesque volutpat. Curabitur maximus urna massa,
                congue cursus tellus sagittis quis. In sem mi, aliquet in ultrices a, pulvinar sed odio.
                Aliquam eget egestas velit. Mauris viverra malesuada ex, in bibendum enim porttitor at.
                In hac habitasse platea dictumst. Maecenas mollis tellus sed tortor aliquam iaculis.
            </p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
                <button type="button" class="btn btn-primary btn-lg px-4 me-sm-3">Primary button</button>
                <button type="button" class="btn btn-outline-secondary btn-lg px-4">Secondary</button>
            </div>
        </div>
        <div class="overflow-hidden" style="max-height: 30vh;">
            <div class="container px-5">
                <img src="https://placehold.co/600x400" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="700" height="500" loading="lazy">
            </div>
        </div>
    </div>

    <!-- Card List -->
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
        <div class="col" v-for="(item, index) in cardItems" :key="index">
            <Card :header="item.header" :title="item.title" :text="item.text" :link="item.link" />
        </div>
    </div>
</template>