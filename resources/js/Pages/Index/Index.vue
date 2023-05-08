<template>
<div>
    Index
</div>
    <h2>{{ message }}</h2>
</template>

<script setup>


const props = defineProps({
    message: {
        type: String,
        required: true,
    },
});
</script>

