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
         <div class="content-body">Projects</div>
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

.content-body {
   background-color: blueviolet;
}
</style>


