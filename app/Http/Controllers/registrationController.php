<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;

class registrationController extends Controller
{
    //
    public function register(Request $request)
    {
        $data = $request->input();
        $firstname = $data['firstname'];
        $lastname = $data['lastname'];
        $username = $data['emailId'];
        $password = $data['password'];

        Registration::create($request->all());

        return redirect('/user');
    }
}
