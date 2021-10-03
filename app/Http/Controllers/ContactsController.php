<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;


class ContactsController extends Controller
{
    public function index(Request $request)
    {
        return view('index');
    }
    public function confirm(Request $request)
    {
        $request->validate([
            'fullname' => 'required|max:255',
            'gender' => 'required',
            'email' => 'required|email|max:255',
            'postcode' => 'required|max:8',
            'address' => 'required|max:255',
            'building_name' => 'max:255',
            'opinion' => 'required|max:120',
        ]);
        $inputs = $request->all();
        return view('confirm',['inputs'=>$inputs,]);
    }
    public function process(Request $request)
    {
        if ($request->get('return')) {
            return redirect('/')->withInput();
        }else {
        $this->validate($request, Contact::$rules);
        $inputs = $request->all();
        Contact::create($inputs);
        return redirect('/thanks');
        }
    }

    public function thanks(Request $request)
    {
        return view('thanks');
    }
}
