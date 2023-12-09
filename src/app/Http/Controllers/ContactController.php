<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('index');
    }

    public function confirm(Request $request){
        $contact = $request->only(
            ['id',
            'first_name',
            'last_name',
            'gender',
            'email',
            'postcode',
            'address',
            'building_name',
            'opinion']);
        return view('confirm', compact('contact'));
    }

    public function store(){
        $contact = $request->only(
            ['id',
            'first_name',
            'last_name',
            'gender',
            'email',
            'postcode',
            'address',
            'building_name',
            'opinion']);
        return view('thanks', compact('contact'));
    }
}
