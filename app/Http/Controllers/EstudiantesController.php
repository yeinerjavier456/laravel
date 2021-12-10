<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use myPHPnotes\Microsoft\Auth;
use myPHPnotes\Microsoft\Handlers\Session;
use myPHPnotes\Microsoft\Models\User;
use Illuminate\Support\Facades\Redirect;


class EstudiantesController extends Controller
{

    public function index( $session=null){


        

        if($session==null){
            return view('estudiantes.index');
        }else{

            return view('estudiantes.index', [
                'session' => $session
            ]);
        }
       
    }

    //// inicio sesion outlok 
    public function callback(Request $request){

        session_start();
        $tenant = "common"; 
        $client_id = "0d7b0a73-c487-443c-8ac1-32e9b959c5ab";
        $client_secret = "GcZ7Q~4GJ2FbUoT2QbQZ4FFsT36q3hZZr6yu1";
        $scopes = [
                    "User.Read",
                    'Files.Read.All',
                
                ];
        $callback = "http://localhost/ibero/public/estudiantes/callback";
        //https://aulavirtual.ibero.edu.co/repositorio/sitios/estudiantes/callback.php

       
        $microsoft = new Auth($tenant,$client_id,$client_secret,$callback, $scopes);
        //print_r($_REQUEST['code']);
        $tokens = $microsoft->getToken($_REQUEST['code'],$_SESSION['adnanhussainturki/microsoft']["state"] );

        // Setting access token to the wrapper
        $microsoft->setAccessToken($tokens->access_token);

        $user = (new User);


        if($user->data->getGivenName()){
            $data=array(
                "user"=>$user->data->getdisplayName(),
                "id"=>$user->data->getid(),
                "userPrincipalName"=>$user->data->getuserPrincipalName(),
            
            );
           
            $data=serialize( $data);
            
            $data= base64_encode($data);

        
            //index($data);
            return Redirect::to("http://127.0.0.1:8000/estudiantes?data= ". $data); 
        }



    }


    public function sign_in(Request $request){
     
        // data para crear url
        session_start();
        $tenant = "common"; 
        $client_id = "0d7b0a73-c487-443c-8ac1-32e9b959c5ab";
        $client_secret = "GcZ7Q~4GJ2FbUoT2QbQZ4FFsT36q3hZZr6yu1";
        $scopes = [
                    "User.Read",
                    'Files.Read.All',
                
                ];
        $callback = "http://localhost/ibero/public/estudiantes/callback";
        //https://aulavirtual.ibero.edu.co/repositorio/sitios/estudiantes/callback.php

        $microsoft = new Auth($tenant, $client_id,  $client_secret, $callback, $scopes);
    
         return Redirect::to($microsoft->getAuthUrl());
      //header("location: ". $microsoft->getAuthUrl()); //Redirecting to get access token
    }

}
