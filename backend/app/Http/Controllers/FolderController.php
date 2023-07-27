<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Folder;
class FolderController extends Controller
{

   public function index(){
    return Folder::select('name','user_id','created_at')->get();

   }
   public function store(Request $request){
        $folder = new Folder();
        $folder->name = $request->folderName;
        $folder->save();



      



 }

}
