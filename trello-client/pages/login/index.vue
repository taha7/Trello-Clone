<template>
   <div>
      <b-form @submit.prevent="onSubmit" @reset="onReset" v-if="show">
         <b-form-group
            id="input-group-1"
            label="Email address:"
            label-for="input-1"
            description="We'll never share your email with anyone else."
         >
            <b-form-input
               id="input-1"
               v-model="form.email"
               type="email"
               required
               placeholder="Enter email"
            ></b-form-input>
         </b-form-group>

         <b-form-group id="input-group-2" label="Your Secret Password" label-for="password">
            <b-form-input
               id="password"
               type="password"
               v-model="form.password"
               required
               placeholder="Type your password"
            ></b-form-input>
         </b-form-group>

         <b-button type="submit" variant="primary">Submit</b-button>
         <b-button type="reset" variant="danger">Reset</b-button>
      </b-form>
   </div>
</template>

<script>
export default {
   data() {
      return {
         form: {
            email: "",
            password: ""
         },
         show: true
      };
   },
   methods: {
      async onSubmit(evt) {
         let response = await this.$auth.loginWith("local", {
            data: this.form
         });

         this.$router.push("/dashboard/home");
      },
      onReset(evt) {
         evt.preventDefault();
         // Reset our form values
         this.form.email = "";
         this.form.name = "";

         // Trick to reset/clear native browser form validation state
         this.show = false;
         this.$nextTick(() => {
            this.show = true;
         });
      }
   }
};
</script>