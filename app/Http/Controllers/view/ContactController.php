<?php

namespace App\Http\Controllers\view;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    function index(){
        $contacts=Contact::paginate(10);
        return view('Contact.index',compact('contacts'));
    }
}
