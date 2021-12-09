<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocentesController extends Controller
{
    public function index( Request $session=null){


        if($session==null){
            return view('docentes.index');
        }else{

            view('users.index', [
                'session' => $session
            ]);
        }
       
    }
}
