<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Category;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index(){
        return view ('index');
    }
    public function admin(){
        return view ('admin');
    }
    public function confirm(ContactRequest $request){
        
        $contact = $request->only(['last_name', 'first_name', 'gender','email','tel_first','tel_second','tel_third', 'address', 'building', 'detail', 'content' ]);
        return view('confirm', compact('contact'));

    }
    public function store(Request $request){
        $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tel', 'address', 'building', 'detail' ]);
        Contact::create($contact);
        return view('thanks');
    }
    public function create(Request $request){
        $this->validate($request, Contact::$rules);
        $form = $request->all();
        Book::create($form);
        return redirect('/contact');
    }

    //public function index(){
    //    $contacts = Contact::with('category')->get();
    //    $categories = Category::all();
    //    return view('admin', compact('contacts', 'categories'));
    //}
}
