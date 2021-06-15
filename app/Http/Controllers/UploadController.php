<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    //
    function index(Request $req)
    {
        $req->session()->put('success', 'success');

        $imageName = 'tempImage.jpg';
        $req->session()->put('image', $imageName);
        //Storage::put('file.jpg', $req->file('file'));
        return $req->file->move(public_path('uploads'), $imageName);
        //return $req->file('file')->store('docs', $imageName);
    }
}
