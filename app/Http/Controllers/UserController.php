<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Http;
use App\Models\Member;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    function index(Request $req)
    {
        $data = $req->input();
        //$dataAPI =  Http::get("https://reqres.in/api/users?page=1");
        //return view('users',['dataAPI'=>$dataAPI['data']]);
        $dataDB = DB::table('registrations')
            ->where('emailId', '=', $data['username'])
            ->get();
        //$dataDB = Member::all();
        //echo $dataDB;
        $password="";
        foreach ($dataDB as $user) {
            $password =  $user->password;
        }

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
