<template>
    <div class="add-contact">
 
      <form @submit.prevent="handleSubmit">
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input v-model="formData.name" type="text" class="form-control" id="name" required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input v-model="formData.email" type="email" class="form-control" id="email" required>
        </div>
        <div class="mb-3">
          <label for="phone" class="form-label">Phone</label>
          <input v-model="formData.phone" type="text" class="form-control" id="phone" required>
        </div>
        <div class="mb-3">
          <label for="country" class="form-label">Country</label>
          <input v-model="formData.country" type="text" class="form-control" id="country" required>
        </div>
        <div class="mb-3">
          <label for="city" class="form-label">City</label>
          <input v-model="formData.city" type="text" class="form-control" id="city" required>
        </div>
        <div class="mb-3">
          <label for="state" class="form-label">State</label>
          <input v-model="formData.state" type="text" class="form-control" id="state" required>
        </div>
        <div class="mb-3">
          <label for="zip" class="form-label">Zip</label>
          <input v-model="formData.zip" type="text" class="form-control" id="zip"  autocomplete="off" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </template>
  
  <script>
  import axios from 'axios';
  
  export default {
    data() {
      return {
        formData: {
          name: '',
          email: '',
          phone: '',
          country: '',
          city: '',
          state: '',
          zip: ''
        }
      };
    },
    methods: {
      handleSubmit() {
        axios.post('http://localhost:8000/api/v1/contacts', this.formData)
          .then(response => {
            console.log('Contact added:', response.data);
            this.resetForm();
            $('#exampleModal').modal('hide'); // Hide the modal after deletion
            window.location.reload(); // Reload the page after success
          })
          .catch(error => {
            console.error('Error adding contact:', error);
          });
      },
      resetForm() {
        this.formData = {
          name: '',
          email: '',
          phone: '',
          country: '',
          city: '',
          state: '',
          zip: ''
        };
      },
      
    }
  }
  </script>
  
  <style scoped>
  .add-contact {
    margin-top: 20px;
  }
  </style>
  