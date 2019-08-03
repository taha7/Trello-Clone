<template>
   <div>
      <b-navbar toggleable="lg" type="light" variant="default">
         <b-navbar-brand href="#">Task Fast</b-navbar-brand>

         <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

         <b-collapse id="nav-collapse" is-nav>
            <b-navbar-nav class="d-flex justify-content-center" style="flex: 1;">
               <b-nav-item :to="{path: '/dashboard/home'}">Home</b-nav-item>
               <b-nav-item :to="{path: '/projects'}">Projects</b-nav-item>
               <b-nav-item href="#">Tasks</b-nav-item>
               <b-nav-item href="#">Calendar</b-nav-item>
               <b-nav-item href="#">Lists</b-nav-item>
            </b-navbar-nav>

            <!-- Right aligned nav items -->
            <b-navbar-nav class="ml-auto">
               <b-nav-form>
                  <b-form-input size="sm" class="mr-sm-2" placeholder="Search"></b-form-input>
                  <b-button size="sm" class="my-2 my-sm-0" type="submit">Search</b-button>
               </b-nav-form>

               <b-nav-item-dropdown right>
                  <!-- Using 'button-content' slot -->
                  <template slot="button-content">
                     <em>User</em>
                  </template>
                  <b-dropdown-item href="#">Profile</b-dropdown-item>
                  <b-dropdown-item href="#">Sign Out</b-dropdown-item>
               </b-nav-item-dropdown>
            </b-navbar-nav>
         </b-collapse>
      </b-navbar>
   </div>
   <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Task Fast</a>
      <button
         class="navbar-toggler"
         type="button"
         data-toggle="collapse"
         data-target="#navbarSupportedContent"
         aria-controls="navbarSupportedContent"
         aria-expanded="false"
         aria-label="Toggle navigation"
      >
         <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav d-flex justify-content-center" style="flex: 1;">
            <li class="nav-item active">
               <nuxt-link :to="{path: '/dashboard/home'}" class="nav-link">Home</nuxt-link>
            </li>
            <li class="nav-item">
               <nuxt-link :to="{path: '/projects'}" class="nav-link">Projects</nuxt-link>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#">Tasks</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#">Callendar</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#">Widgets</a>
            </li>
         </ul>
         <form class="form-inline my-2 my-lg-0">
            <input
               class="form-control mr-sm-2"
               type="search"
               placeholder="Search"
               aria-label="Search"
            />
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
         </form>
      </div>
   </nav>-->
</template>

<script>
export default {};
</script>

<style>
</style>
