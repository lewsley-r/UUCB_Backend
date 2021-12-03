<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function fileUpload(Request $req){
        if($req->file()) {
            $fileName = time().'_'.$req->file->getClientOriginalName();
            // save file to azure blob virtual directory uplaods in your container
            $filePath = $req->file('file')->storeAs('videos/', $fileName, 'azure');
            return ;

        }
   }
}
