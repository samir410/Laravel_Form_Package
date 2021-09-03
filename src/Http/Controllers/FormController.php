<?php

namespace samir\formbuilder\Http\Controllers;
use App\Http\Controllers\Controller;
use samir\formbuilder\Models\Form;
use Mail;
use samir\formbuilder\Mail\ConfirmMailable;

use Illuminate\Http\Request;

class FormController extends Controller
{

    public function index(){
        return view('FormBuilder::formbuilder');
    }

    public function send(Request $request){
       Mail::to(config('FormBuilder.send_mail_to'))->send(new ConfirmMailable($request->subject, $request->fname));
       Form::create($request->all());
       return redirect(route('FormBuilder'));
    }
}
