<template>
    <div>
        <div class="d-flex justify-content-between h4 pb-2 mb-4 text-success border-bottom border-danger">
            <h5>Contact List</h5>
            <button type="button" class="btn btn-sm btn-outline-primary text-center" data-bs-toggle="modal" data-bs-target="#exampleModal">
             Add Contact
            </button>
        </div>
     
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
              <th>Action</th>
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
              <td>
                
                <button @click="fetchContactDetails(contact.id)" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#detailModal">
                    <i class="bi bi-eye-fill"></i>
              </button>
              <button @click="updateContact(contact.id)" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#updateModal" >
                <i class="bi bi-pencil"></i> 
              </button>
              <button @click="showDeleteConfirmationModal(contact.id)" class="btn btn-link">
                <i class="bi bi-trash3"></i>
              </button>
            </td>
            </tr>
          </tbody>
        </table>
      </div>
     
        <!-- Detail Contact -->
        <div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="detailModalLabel">Detail Contact</h1>
                    
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <detail-contact :contact="contactData" />
                    </div>
                </div>
            </div>
        </div>
        </div>
         <!-- Detail Contact -->
        <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="updateModalLabel">update Contact</h1>
                    
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div>
                     <update-contact :updateContact="contactUpdateData" />
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
  </template>
  
  
  <script>
  import axios from 'axios';
  import detailContact from './DetailContact.vue';
  import updateContact from './UpdateContact.vue';
  export default {
    components:{
       detailContact,
       updateContact,
    },
    data() {
      return {
        contacts: [],
        contactData: null,
        contactUpdateData: null,
        contactToDelete:null,
        
      };
    },
    methods: {
        async fetchContacts() {
            axios.get('http://127.0.0.1:8000/api/v1/contacts')
            .then(response => {
                console.log('API Response:', response.data); // Add this line
                this.contacts = response.data.data; // Update this line
                
            })
            .catch(error => {
                console.error('Error fetching contacts:', error);
            });
        },
        
        async fetchContactDetails(id) {
                try {
                    const response = await axios.get(`http://localhost:8000/api/v1/contacts/${id}`);
                    // console.log('Contact Details:', response.data.data);
                    this.contactData = response.data.data; // Assign the data to a property
                } catch (error) {
                    console.error('Error fetching contact details:', error);
                }
        },
        async updateContact(id) {
                try {
                    const response = await axios.get(`http://localhost:8000/api/v1/contacts/${id}`);
                    // console.log('Contact Details:', response.data.data);
                    this.contactUpdateData = response.data.data; // Assign the data to a property
                } catch (error) {
                    console.error('Error fetching contact details:', error);
                }
        },
            
        showDeleteConfirmationModal(id) {
                const confirmDelete = window.confirm("Are you sure you want to delete this contact?");
                if (confirmDelete) {
                    this.confirmDeleteContact(id);
                }
        },

        async confirmDeleteContact(id) {
                axios.delete(`http://localhost:8000/api/v1/contacts/${id}`)
                .then(response => {
                    console.log('Contact deleted:', response.data);
                    this.fetchContacts(); // Refresh the contact list after deleting
                    
                })
                .catch(error => {
                    console.error('Error deleting contact:', error);
                });
        },
    },

    mounted() {
      console.log('Component mounted');
      this.fetchContacts();
   
    }
  }
  </script>
  
  <style scoped>
  /* Add your component-specific styles here */
  </style>
  