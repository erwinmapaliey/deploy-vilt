<script setup>
import { Link } from '@inertiajs/vue3'

defineProps({
  projects: Array
})
</script>

<template>
  <div class="container mx-auto p-24">
    <Link href="/" class="flex items-center text-primary hover:text-[#946b2d] mb-2">
      <i class="text-2xl bx bx-left-arrow-alt mr-2"></i>
      <span>Back to home</span>
    </Link>

    <h2 class="text-5xl font-bold mb-12 text-secondary">Project List</h2>

    <table class="table-auto w-full">
      <thead>
        <tr class="border-b border-gray-500/20">
          <th class="thead">Year</th>
          <th class="thead">Project</th>
          <th class="thead">Made at</th>
          <th class="thead">Tech Stack</th>
          <th class="thead">URL Website</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="project in projects" :key="project.id" class="border-b border-gray-500/20">
          <td class="text-gray-400 py-4 text-sm">{{ project.year }}</td>
          <td class="py-4 text-sm">{{ project.project_name }}</td>
          <td class="text-gray-400 py-4 text-sm" v-if="project.company !== null">{{ project.company.alias }}</td>
          <td class="text-gray-400 py-4 text-sm" v-else></td>
          <td class="py-4 text-xs">
            <ul class="flex flex-wrap gap-2">
              <li v-for="skill in project.skills" :key="skill.id" class="bg-amber-300 px-2 py-1 text-secondary rounded-lg">{{ skill.name }}</li>
            </ul>
          </td>
          <td class="py-4 text-sm" v-if="project.url !== null"><a :href="project.url" target="_blank" >{{ project.url }}</a></td>
          <td class="py-4 text-sm" v-else></td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<style scoped>
.thead {
  @apply text-sm text-white text-start py-4 font-semibold
}

</style>