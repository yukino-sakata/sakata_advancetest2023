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

    public function store(Request $request){
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

    public function remove(Request $request){
        Contact::find($request->id)->delete();
        return redirect('admin');
    }

    public function search(Request $request){
        $contacts = Contact::
        NameSearch($request->search_name)
        ->GenderSearch($request->search_gender)
        ->EmailSearch($request->search_email)
        ->get();

        return view('admin', compact('contacts'));
    }
}
