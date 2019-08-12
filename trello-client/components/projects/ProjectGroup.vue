<template>
   <div class="projects-group">
      <div class="projects-header">
         <div class="header-title">{{ title }}</div>
         <div class="header-actions">
            <b-dropdown size="lg" variant="link" toggle-class="text-decoration-none" no-caret>
               <template slot="button-content">
                  <div class="more-btn">
                     <i class="ion-ios-more"></i>
                  </div>
               </template>
               <b-dropdown-item href="#">Action</b-dropdown-item>
               <b-dropdown-item href="#">Another action</b-dropdown-item>
               <b-dropdown-item href="#">Something else here...</b-dropdown-item>
            </b-dropdown>
         </div>
      </div>
      <div class="row">
         <div class="col-md-2" v-for="project in projects" :key="project.id">
            <b-card style="max-width: 20rem;" class="mb-2 card-style">
               <div class="card-actions d-flex justify-content-end align-items-center">
                  <span class="card-icon">
                     <i class="ion-ios-heart"></i>
                  </span>
                  <span class="card-icon">
                     <i class="ion-ios-gear"></i>
                  </span>
               </div>
               <b-card-title>{{ project.title | ucfirst }}</b-card-title>
               <b-card-text class="description">{{ project.description | ellipseText}}</b-card-text>
               <div class="project-modules d-flex">
                  <span class="card-icon" v-b-tooltip.hover title="Tasks">
                     <i class="ion-ios-list-outline"></i>
                  </span>
                  <span class="card-icon" v-b-tooltip.hover title="Discussion">
                     <i class="ion-chatbubbles"></i>
                  </span>
                  <span class="card-icon">
                     <i class="ion-ios-calendar-outline" v-b-tooltip.hover title="Calendar"></i>
                  </span>
                  <span class="card-icon" v-b-tooltip.hover title="Files">
                     <i class="ion-ios-folder"></i>
                  </span>
               </div>
               <b-button href="#" variant="primary">Go somewhere</b-button>
            </b-card>
         </div>
      </div>
   </div>
</template>

<script>
export default {
   props: ["title", "projects"],
   filters: {
      ucfirst: value => {
         let words = value
            .split(" ")
            .map(word => word.charAt(0).toUpperCase() + word.slice(1));
         return words.join(" ");
      },
      ellipseText: value => {
         return value.slice(0, 60) + "...";
      }
   }
};
</script>

<style scoped>
.projects-group {
   padding: 20px 0px;
   border-bottom: 1px solid #c4c4c4;
}

.projects-header {
   font-size: 20px;
   font-weight: bold;
   margin: 10px 0px;
   display: flex;
   align-items: center;
}
.more-btn {
   background: white;
   color: #7085a6;
   border-radius: 50%;
   display: flex;
   justify-content: center;
   align-items: center;
   width: 1.6rem;
   height: 1.6rem;
   font-size: 1.6rem;
   padding: 0.25rem 0.25rem;
   box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1),
      0 4px 6px -2px rgba(0, 0, 0, 0.05);
}
.card-style {
   box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1),
      0 4px 6px -2px rgba(0, 0, 0, 0.05);
   border: none;
}
.card-title {
   margin-bottom: 0.75rem;
   font-size: 1rem;
   font-weight: bold;
}
.card-icon {
   font-size: 1.4rem;
   color: #7085a6;
   cursor: pointer;
   padding: 6px;
   height: 35px;
   display: flex;
   justify-content: center;
   align-items: center;
}
.description {
   min-height: 75px;
   color: #7085a6;
   font-size: 0.9rem;
}
.project-modules {
   margin-bottom: 0.75rem;
}
.project-modules span {
   margin-right: 11px;
   border-radius: 5px;
   box-shadow: 0px 0px 6px 1px #dbdbdb;
}
</style>