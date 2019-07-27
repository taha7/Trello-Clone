<template>
   <div>
      <Navbar />
      <section class="content-wrapper">
         <div class="content-header">Hello Taha from projects page</div>
         <div class="content-body">Projects</div>
      </section>
   </div>
</template>

<script>
import Navbar from "../../layouts/partials/navbar";
export default {
   components: {
      Navbar
   }
};
</script>

<style scoped>
.content-wrapper {
   padding: 2rem 4rem;
   width: 100%;
   background: #e7eaf0;
   min-height: calc(100vh - 56px);
}

.content-header {
   background-color: red;
   margin-bottom: 20px;
}

.content-body {
   background-color: blueviolet;
}
</style>


