<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function uploadForm(){
        return view('upload');
    }

    public function uploadFile(Request $request){
        // dd($request->all());
        $request->file->store('public');
        return 'file has been uploaded successfully';
    }
}
