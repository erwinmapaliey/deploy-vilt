<script setup>
import { Link } from '@inertiajs/vue3'

defineProps({
  message: String
})
</script>

<script>
import MainLayout from '../../Layouts/MainLayout.vue'
export default {
  layout: MainLayout
}
</script>

<template>
  <div>Index Pages</div>
  <Link href="/hello">Show Pages</Link>
  <div>The message is {{ message }}</div>
</template>