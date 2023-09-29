<template>
   <div class="app-style">
        <h5>Contact Manager</h5>
        <hr>
    </div> 

   <div class="container">
        <div class="row row-cols-1 row-cols-md-1 g-4">
            
            <add-contact />
            
            <contacts-list/>
            
        
        </div> 
    </div>
</template>
<script >
import addContact from './AddContact.vue';
import contactsList from './ContactsList.vue';
import detailContact from './DetailContact.vue';


export default{
    components:{
        addContact,
        contactsList,
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