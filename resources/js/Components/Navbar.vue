<template>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-xxl">
            <a class="navbar-brand" href="/">{{ brand }}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li v-for="(link, index) in links" :key="index" class="nav-item">
                        <Link class="nav-link" :href="link.href">{{ link.text }}</Link>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>

<script setup>
defineProps({
    brand: {
        type: String,
        required: true,
    },
    links: {
        type: Array,
        required: true,
        default: () => [],
    },
});
</script>