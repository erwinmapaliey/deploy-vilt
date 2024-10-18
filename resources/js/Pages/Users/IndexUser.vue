<script setup>
defineProps({
  userList: Array
})
</script>

<template>
  <div>
    <h2>User List</h2>
    <div v-for="user in userList" :key="user.id">
      <p>{{ user.name }}</p>
    </div>
  </div>
</template>