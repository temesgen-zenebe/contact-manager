<template>
    <div>
      <h5>Contact List</h5>
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Country</th>
              <th>City</th>
              <th>State</th>
              <th>Zip</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="contact in contacts" :key="contact.id">
              <td>{{ contact.name }}</td>
              <td>{{ contact.email }}</td>
              <td>{{ contact.phone }}</td>
              <td>{{ contact.country }}</td>
              <td>{{ contact.city }}</td>
              <td>{{ contact.state }}</td>
              <td>{{ contact.zip }}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </template>
  
  <script>
  import axios from 'axios';
  
  export default {
    data() {
      return {
        contacts: []
      };
    },
    methods: {
      fetchContacts() {
        axios.get('http://127.0.0.1:8000/api/v1/contacts')
          .then(response => {
            this.contacts = response.data;
          })
          .catch(error => {
            console.error('Error fetching contacts:', error);
          });
      }
    },
    mounted() {
      this.fetchContacts();
    }
  }
  </script>
  
  <style scoped>
  /* Add your component-specific styles here */
  </style>
  