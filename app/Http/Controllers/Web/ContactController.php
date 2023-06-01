<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ContactFormRequest;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function index() {
        return view('web.contact');
    }

    public function create(){
        $contact = Contact::get();
        return view('web.contact');
    }
    public function store(ContactFormRequest $request){
        $data = $request->validated();
        $contact = new Contact;
        $contact->name = $data['name'];
        $contact->email = $data['email'];
        $contact->subject = $data['subject'];
        $contact->message = $data['message'];
        $contact->save();
        return redirect('/lien-he')->with('message','Gửi thông tin thành công!');
    }
    
}
