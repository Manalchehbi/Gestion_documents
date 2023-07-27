<?php

namespace App\Http\Controllers;
use App\Models\File;
use Illuminate\Http\Request;

class FileController extends Controller
{
   public function store(Request $request){
        $filePDF = new File();
        if ($request->hasfile('filePdf')){

            $file = $request->file('filePdf');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'Fichier'.'.'.$extention;
            $file->move('images/Fichiers/', $filename);
            $filePDF->name = $filename;
            }
    
     
        $filePDF->save();

   }
}
