<template>
  <div>
    <h5>Contact Details</h5>
    <div v-if="contact">
      <p>Name: {{ contact.name }}</p>
      <p>Email: {{ contact.email }}</p>
      <p>Phone: {{ contact.phone }}</p>
      <p>Country: {{ contact.country }}</p>
      <p>City: {{ contact.city }}</p>
      <p>State: {{ contact.state }}</p>
      <p>Zip: {{ contact.zip }}</p>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    contact: Object
  }
}
</script>

<style scoped>
/* Add your component-specific styles here */
</style>
