<template>
   <div class="app-style">
        <h5>Contact Manager</h5>
        <hr>
    </div> 
  
   <div class="container">
    <!-- Button trigger modal -->
        <button type="button" class="btn btn-sm btn-outline-primary text-center" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Add Contact
        </button>
        <div class="row row-cols-1 row-cols-md-1 g-4">
           
            <contact-list/>
            
             <detail-contact/>
        </div> 
    </div>
 

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <add-contact />
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>
</template>
<script >
import addContact from './AddContact.vue';
import contactList from './ContactsList.vue';
import detailContact from './DetailContact.vue';


export default{
    components:{
        addContact,
        contactList,
        detailContact,
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



