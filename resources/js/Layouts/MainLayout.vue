<script setup>
import { Link } from '@inertiajs/vue3'
import { ref } from 'vue'

const counter = ref(0)
setInterval(() => counter.value++, 1000);
</script>

<template>
  <Link href="/">Main Page</Link>&nbsp;
  <Link href="/hello">Show Page</Link>

  <div>
    The counter is {{ counter }}
  </div>

  <slot></slot>
</template>