<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index()
    {
        return view('page.index');
    }

    public function test()
    {
        return view('sablon.mail-1');
    }

    public function test2()
    {
        return view('sablon.mail-2');
    }
    
    public function uploadImage(Request $request) 
    {
        $file = $request->file('upload');
        $uploadDestination = public_path() . '/uploads/about';
        $filename = preg_replace('/\s+/', '', $file->getClientOriginalName());
        $fileName = md5($filename) . "_" . $filename;
        $file->move($uploadDestination, $fileName);
    }
}
