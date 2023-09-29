<?php

namespace App\Http\Controllers\Api\V1;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactCreateRequest;
use App\Http\Resources\V1\ContactResource;


class ContactController extends Controller
{
    public function index()
    {
        return ContactResource::collection(Contact::all()); 
        // return ContactResource::collection(Contact::paginate(1)); 
    }

    //Display the specified resource.  
    public function show(Contact $contact)
    {
        return new ContactResource($contact);
    }

    public function store(ContactCreateRequest $request)
    {
        Contact::create($request->validated());
        return response()->json("Contact Created");
    }


    public function update(ContactCreateRequest $request, Contact $contact)
    {
        $contact ->update($request->validated());
        return response()->json(("Contact Updated"));       
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        return response()->json("Contact Delete");
    }

}
