<template>
   <div class="app-style">
        <h5>Contact Manager</h5>
        <hr>
    </div> 
  
   <div class="container">
    <!-- Button trigger modal -->
        
        <div class="row row-cols-1 row-cols-md-1 g-4 d-flex justify-content-between">
            <!--contact list components -->
            <contact-list />

        </div> 
    </div>
 
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Contact</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <add-contact />
        </div>
        
        </div>
    </div>
    </div>
</template>
<script >
import addContact from './AddContact.vue';
import contactList from './ContactsList.vue';



export default{
    components:{
        addContact,
        contactList, 
    }
}
</script>

<style>
.app-style{
    margin: auto;
    max-width: 1000px;
    padding: 20px 20px;
    text-align: center;
}
</style>



