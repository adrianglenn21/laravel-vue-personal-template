<template>
    <div class="card">
        <div class="card-header">
            {{ header }}
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ title }}</h5>
            <p class="card-text">{{ text }}</p>
            <a :href="link" class="btn btn-primary">Learn More</a>
        </div>
    </div>
</template>

<script setup>
defineProps({
    header: String,
    title: String,
    text: String,
    link: String,
});
</script>