<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index(){
        return view('index');
    }

    public function confirm(ContactRequest $request){
        $contact = $request->only(
            ['first_name',
            'last_name',
            $value['gender'] = 'gender',
            'email',
            'postcode',
            'address',
            'building_name',
            'opinion']);

        return view('confirm', compact('contact'));
    }

    public function store(ContactRequest $request){
        $contact = $request->only(
            ['fullname',
            'gender',
            'email',
            'postcode',
            'address',
            'building_name',
            'opinion']);
        Contact::create($contact);
        return view('thanks');
    }

    public function admin(){
        $contacts = Contact::all();
        return view('admin', ['contacts' => $contacts]);
    }
}
