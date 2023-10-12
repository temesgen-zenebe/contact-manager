<template>
    <form @submit.prevent="handleSubmit">
      <div v-if="updateContact">
        <div class="mb-3">
          <label for="updatedName" class="form-label">Name</label>
          <input type="text" class="form-control" id="updatedName" v-model="updateContact.name">
        </div>
        <div class="mb-3">
          <label for="updatedEmail" class="form-label">Email</label>
          <input type="email" class="form-control" id="updatedEmail" v-model="updateContact.email">
        </div>
        <div class="mb-3">
          <label for="updatedPhone" class="form-label">Phone</label>
          <input type="tel" class="form-control" id="updatedPhone" v-model="updateContact.phone">
        </div>
        <div class="mb-3">
          <label for="updatedCountry" class="form-label">Country</label>
          <input type="text" class="form-control" id="updatedCountry" v-model="updateContact.country">
        </div>
        <div class="mb-3">
          <label for="updatedCity" class="form-label">City</label>
          <input type="text" class="form-control" id="updatedCity" v-model="updateContact.city">
        </div>
        <div class="mb-3">
          <label for="updatedState" class="form-label">State</label>
          <input type="text" class="form-control" id="updatedState" v-model="updateContact.state">
        </div>
        <div class="mb-3">
          <label for="updatedZip" class="form-label">Zip</label>
          <input type="text" class="form-control" id="updatedZip" v-model="updateContact.zip">
        </div>
      </div>
      <button type="submit" class="btn btn-sm btn-primary">Update Contact</button>
    </form>
  </template>
  
  <script>
  export default {
    props: {
      updateContact: Object
    },
    methods: {
        handleSubmit() {
            // Assuming you have a method to handle the form submission
            this.updateContactInfo(this.updateContact);
        },
        
        async updateContactInfo(updatedData) {
            try {
                    const response = await axios.put(`http://localhost:8000/api/v1/contacts/${updatedData.id}`, updatedData);
                    console.log('Contact updated:', response.data);
                   
                    $('#updateModal').modal('hide'); // Hide the modal after deletion

                } catch (error) {
                    console.error('Error updating contact:', error);
                }    
        
        },
    }
  }
  </script>
  