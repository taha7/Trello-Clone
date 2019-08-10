<template>
   <div>
      <b-navbar toggleable="lg" type="light" variant="default">
         <b-navbar-brand href="#">Task Fast</b-navbar-brand>

         <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

         <b-collapse id="nav-collapse" is-nav>
            <b-navbar-nav class="d-flex justify-content-center" style="flex: 1;">
               <b-nav-item :to="{path: '/dashboard/home'}">
                  <i class="nav-icons ion-ios-home-outline"></i>
                  Home
               </b-nav-item>
               <b-nav-item :to="{path: '/projects'}">
                  <i class="nav-icons ion-pull-request"></i>
                  Projects
               </b-nav-item>
               <b-nav-item href="#">
                  <i class="nav-icons ion-ios-list-outline"></i>
                  Tasks
               </b-nav-item>
               <b-nav-item href="#">
                  <i class="nav-icons ion-ios-calendar-outline"></i>
                  Calendar
               </b-nav-item>
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
</template>

<script>
export default {};
</script>

<style>
.navbar {
   padding: 0 1rem;
}
.nav-icons {
   font-size: 25px;
}
.nav-item:hover a {
   color: #2780f8 !important;
   background: #e5e5e52e;
}
</style>
