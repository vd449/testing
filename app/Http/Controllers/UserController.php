<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Http;
use App\Models\Member;

class UserController extends Controller
{
    //
    function index(Request $req)
    {
        //$dataAPI =  Http::get("https://reqres.in/api/users?page=1");
        //return view('users',['dataAPI'=>$dataAPI['data']]);
        $dataDB = Member::all();
        $password="";
        foreach ($dataDB as $user) {
            $password =  $user->password;
        }
        $data = $req->input();
        echo $data['password'];
        if($data['password']==$password) {
            $req->session()->put('user', $data['username']);
            return redirect('profile');
        }
        else
        {
            return redirect('user');
        }
    }
}
