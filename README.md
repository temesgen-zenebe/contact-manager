Contact-manager-Laravel-vue-DevExer 
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


DevExercise submission 
Sure! Here's the list of completed tasks :

- [x] Created a API for a simple app that lists basic contact information (Name, Email, Phone, Country, City, State/Region, Zip/Postal Code, etc.).
- [x] Implemented  API  functionality to allow creating, editing, and deleting contact info (demonstrated using  insomnia frontend tester tool )
- [ ] eg. this are API end points Contact Created Request: (http://localhost:8000/api/v1/contacts), contact index Request:(http://127.0.0.1:8000/api/v1/contacts)
  (GET|HEAD       http://localhost:8000/api/v1/contacts ........................................... contacts.index › Api\V1\ContactController@index 
  POST            http://localhost:8000/api/v1/contacts ........................................... contacts.store › Api\V1\ContactController@store 
  GET|HEAD        http://localhost:8000/api/v1/contacts/{contact} ................................... contacts.show › Api\V1\ContactController@show 
  PUT|PATCH       http://localhost:8000/api/v1/contacts/{contact} ............................... contacts.update › Api\V1\ContactController@update 
  DELETE          http://localhost:8000/api/v1/contacts/{contact} ............................. contacts.destroy › Api\V1\ContactController@destroy )
 
- [x] Created a migration to create a contacts table.
- [x] Implemented soft deletes for contacts.
- [x] Utilized form requests for validation. Alling rules using form request 
- [x] Implemented a view composer to add a count of contact labels to the list of contacts using the service provider container.
- [x] Validated input: Name/Email/Phone are required, Email is unique and a valid email address, State is 2 chars or empty.
- [x] Integrated a trait for the contacts model, allowing retrieval of a contact's info as a JSON string.
- [x] Demonstrated usage of the service container provider applied for " composer count of contact labels to the list of contacts" 
- [x] Utilized VueJS in the UI integration. useing api rout 

Please let me know if there's anything else you'd like to ask me  or if you need further required action!
