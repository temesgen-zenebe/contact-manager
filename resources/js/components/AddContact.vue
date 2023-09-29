<template>
    <div class="add-contact">
      <h5>Add New Contact</h5>
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
          phone: ''
        }
      };
    },
    methods: {
      handleSubmit() {
        axios.post('http://localhost:8000/api/v1/contacts', this.formData)
          .then(response => {
            console.log('Contact added:', response.data);
            this.resetForm();
          })
          .catch(error => {
            console.error('Error adding contact:', error);
          });
      },
      resetForm() {
        this.formData = {
          name: '',
          email: '',
          phone: ''
        };
      }
    }
  }
  </script>
  
  <style scoped>
  .add-contact {
    margin-top: 20px;
  }
  </style>
  