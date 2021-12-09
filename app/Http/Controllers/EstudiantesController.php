<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use myPHPnotes\Microsoft\Auth;
use myPHPnotes\Microsoft\Handlers\Session;
use myPHPnotes\Microsoft\Models\User;

class EstudiantesController extends Controller
{
    public function index( Request $session=null){


        if($session==null){
            return view('estudiantes.index');
        }else{

            view('users.index', [
                'session' => $session
            ]);
        }
       
    }

    //// inicio sesion outlok 
    public function auth_outlok(){
        
       
        require "./vendor/autoload.php";
            session_start(); 
          
            $microsoft = new Auth(Session::get("tenant_id"),Session::get("client_id"),  Session::get("client_secret"), Session::get("redirect_uri"), Session::get("scopes"));
            $tokens = $microsoft->getToken($_REQUEST['code'], Session::get("state"));

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
            
                view('users.index', [
                    'session' => $session
                ]);
            }


    }

    public function sign_in(){
        print_r("entro");
        exit;
        session_start(); // Important
        require "vendor/autoload.php";

        

        $tenant = "common"; 
        $client_id = "0d7b0a73-c487-443c-8ac1-32e9b959c5ab";
        $client_secret = "GcZ7Q~4GJ2FbUoT2QbQZ4FFsT36q3hZZr6yu1";
        $scopes = [
                    "User.Read",
                    'Files.Read.All',
                
                ];
        $callback = "http://localhost:8080/IBERO-Estudiantes/callback.php";
        //https://aulavirtual.ibero.edu.co/repositorio/sitios/estudiantes/callback.php

        $microsoft = new Auth($tenant, $client_id,  $client_secret, $callback, $scopes);
        header("location: ". $microsoft->getAuthUrl()); //Redirecting to get access token
    }

}
