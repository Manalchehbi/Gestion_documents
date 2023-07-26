<?php

namespace App\Http\Controllers;
use App\Models\Employe;
use Illuminate\Http\Request;
use App\Services\FileUploadService;
use Illuminate\Support\Str;

class EmployeController extends Controller
{


   
    public function index(){
        return Employe::select('id','name','email','password')->get();
    }

    public function store(Request $request ){
       $pwd = Str::random(8);

        $employe = new Employe();
        $employe->name =$request->name;
        $employe->email = $request->email;
        $employe->password = $pwd;
        $employe->image =  $request->image;
       
        $employe->save();

    }


    

    
    public function show(Employe $Employe ){
        return $Employe;
    }
    public function update(Request $Request ,Employe $Employe){
        $Employe->update([
            'name' => $Request->name,
            'email' =>$Request->email,
            'password' =>$Request->password,
            'done' =>$Request->done,

        ]);
        return $Employe;

    }

    public function destroy(Employe $Employe){
        $Employe->delete();
        return ['message'=> 'l employé à été supprimé avec succes '];

    }
}
