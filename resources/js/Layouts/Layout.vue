<script setup>
import Navbar from '../Components/Navbar.vue';
</script>

<template>
    <div>
        <header>
            <Navbar brand="Portfolio" :links="[
                { href: '/', text: 'Home' },
                { href: '/about', text: 'About' }
            ]" />
        </header>

        <main class="container mt-4">
            <slot />
        </main>
    </div>
</template>