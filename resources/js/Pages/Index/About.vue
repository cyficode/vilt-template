<template>
    <div>About Page</div>
    <h2>{{ message }}</h2>
</template>

<script setup>
const props = defineProps({
    message: {
        type: String,
    },
});

</script>

