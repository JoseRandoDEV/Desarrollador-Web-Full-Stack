<script setup>
import { usePage } from '@inertiajs/vue3'

const page = usePage()
</script>

<template>
  <pre>{{ page.props }}</pre>
</template>
