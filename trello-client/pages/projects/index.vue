<template>
   <div>
      <section class="content-wrapper">
         <div class="content-header d-flex align-items-center justify-content-between">
            <div class="header-welcome d-flex">
               <span class="hello mr-1">👋 Hi Taha!</span>
               <div class="text-muted">The journey of a thousand miles begins with one step.</div>
            </div>
            <div class="header-action d-flex">
               <button class="btn btn-success">
                  <i class="ion-android-add-circle"></i> New Project
               </button>
            </div>
         </div>
         <div class="content-body">
            <div class="projects-header">
               <div class="header-title">Personal Projects</div>
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
               <div class="col-md-2">
                  <b-card style="max-width: 20rem;" class="mb-2 card-style">
                     <div class="card-actions d-flex justify-content-end align-items-center">
                        <span class="card-icons">
                           <i class="ion-android-star"></i>
                        </span>
                        <span class="card-icons">
                           <i class="ion-gear-a"></i>
                        </span>
                     </div>
                     <b-card-title>First Project</b-card-title>
                     <b-card-text>Some quick example text to build on the card title and make up the bulk of the card's content.</b-card-text>
                     <b-button href="#" variant="primary">Go somewhere</b-button>
                  </b-card>
               </div>
            </div>
         </div>
      </section>
   </div>
</template>

<script>
export default {
   layout: "master-container",

   data() {
      return {
         projects: []
      };
   },

   async asyncData({ params, app }) {
      try {
         let response = await app.$axios.$get(
            `projects?api_token=0Q3NnBVF076Gbj1HISi04qtwy6qdZ1ZYOaXgxIxLtVcwx59aUbVNozQmSDKP`,
            {
               headers: {
                  Accept: "application/json",
                  "Content-Type": "application/json"
               }
            }
         );

         return {
            projects: response.data
         };
      } catch (e) {
         console.log(e);
      }
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
   margin-bottom: 20px;
}

.header-welcome {
   font-size: 18px;
}
.hello {
   font-weight: 600;
   font-size: 18px;
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
   box-shadow: 0px 0px 2px 1px;
}
.card-style {
   box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1),
      0 4px 6px -2px rgba(0, 0, 0, 0.05);
   border: none;
}
.card-icons {
   font-size: 1.4rem;
   margin-left: 15px;
   color: #7085a6;
   cursor: pointer;
}
</style>


