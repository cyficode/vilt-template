<template>
    <Link :href="route('home')">Main Page</Link>&nbsp;
    <Link :href="route('about')">About Page</Link>&nbsp;
    <Link :href="route('flash')">Test Flash</Link>
    <div v-if="page.props.flash.success" class="mb-4 border rounded-md shadow-sm border-green-200 dar:border-green-800 bg-green-50 dark:bg-green-900 p-2">
        {{ flashSuccess }}
    </div>
    <slot>Default</slot>
</template>

<script setup>
// import { Link } from '@inertiajs/inertia-vue3'
import { computed } from "vue";
import { Link, usePage } from '@inertiajs/vue3'
// import { Link, usePage } from '@inertiajs/inertia-vue3'

// page.props.value.flash.success
const page = usePage()
// const flashSuccess = computed(() => page.props.value.flash.success)
const flashSuccess = computed(() => page.props.flash.success)

</script>
