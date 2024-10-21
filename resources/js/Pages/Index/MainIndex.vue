<script setup>
import { Link } from '@inertiajs/vue3'
</script>

<template>
  <div class="container mx-auto min-h-screen flex gap-4">
    <header class="w-1/2 sticky top-0 py-24 px-12 flex flex-col justify-between max-h-screen">
      <div>
        <a href="." class="text-5xl font-bold">
            Hi,<br>I'm <span>Erwin Mapaliey</span>
        </a>
        <div class="text-2xl text-secondary my-4">Fullstack Software Engineer</div>
        <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga alias, nostrum doloremque magni eius minus.</p>
        
        <nav class="flex flex-col py-20 gap-4">
          <a href="#about" class="active">
            <span class="line"></span>
            <span>ABOUT</span>
          </a>
          <a href="#experience">
            <span class="line"></span>
            <span>EXPERIENCE</span>
          </a>
          <a href="#project">
            <span class="line"></span>
            <span>PROJECTS</span>
          </a>
        </nav>
      </div>

      <div class="home-sci flex gap-4 text-3xl">
        <a href="#"><i class='bx bxl-github'></i></a>
        <a href="#"><i class='bx bxl-instagram'></i></a>
        <a href="#"><i class='bx bxl-linkedin'></i></a>
      </div>
    </header>

    <main class="w-1/2 px-12">
      <!-- About Section -->
      <section id="about" class="h-screen pt-24">
          <div class="home-content">
              <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos sit eaque officiis perferendis at possimus impedit iste laudantium beatae deserunt delectus nihil quia quaerat animi, asperiores, quidem temporibus suscipit. Labore.</p>
          </div>
      </section>
        
      <!-- Experience Section -->
      <section id="experience" class="h-screen pt-24">
          <div class="home-content">
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam veritatis dolor alias odit. Labore qui inventore sed libero asperiores assumenda hic natus quos. Deleniti quam, animi fuga iusto voluptatum alias!</p>
          </div>
      </section>
        
      <!-- Project Section -->
      <section id="project" class="h-screen pt-20">
          <div class="home-content">
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus aliquid provident omnis reprehenderit. Magnam nesciunt ex, facilis minus id earum perspiciatis quam minima asperiores quos suscipit debitis expedita recusandae soluta error temporibus consequuntur animi voluptate harum voluptatum eveniet! Facilis, odit?</p>
          </div>

          <Link href="/projects" class="flex items-center text-primary hover:text-[#946b2d]">
            <span class="text-sm">View Project Archive</span>
            <i class="text-xl bx bx-right-arrow-alt ml-1"></i>
          </Link>
      </section>
    </main>
  </div>
</template>