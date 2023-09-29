
import './bootstrap';

import { createApp } from 'vue';
import App from "./components/App.vue";
import ContactList from "./components/ContactsList.vue";
import DetailContact from "./components/DetailContact.vue";
import AddContact from "./components/AddContact.vue";

const app = createApp();
app.component('app' , App);
app.component('contact-list' , ContactList);
app.component('detail-contact' , DetailContact);
app.component('add-contact' , AddContact);

app.mount("#app");