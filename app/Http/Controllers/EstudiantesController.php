<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use myPHPnotes\Microsoft\Auth;
use myPHPnotes\Microsoft\Handlers\Session;
use myPHPnotes\Microsoft\Models\User;
use Illuminate\Support\Facades\Redirect;
use App\Models\uploadModel;


class EstudiantesController extends Controller
{

    public function index(){
        // print_r($datas);
   
         /* Comprobamos que ha llegado correctamente el campo 'data' */
         if (session('users')) {
            /* Deshacemos el trabajo hecho por base64_encode */
            $data = base64_decode((session('users')));
            /* Deshacemos el trabajo hecho por 'serialize' */
            $data = unserialize($data);
          
        
        }else{
            $data="";
        }

        $archivo=uploadModel::get_plataforma_estudiantes();
        $archivo=$archivo->all();

  
     
        if($data===null){
      
            return view('estudiantes.index',compact(['archivo','data']));
        }else{
         
         
              
            return view('estudiantes.index',compact(['archivo','data']));
           
              
           
        }
       
    }
    public function login_estudent(){
        
    }

    //// inicio sesion outlok 
    public function callback(){
      
        session_start();
                // data para crear url
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


        // $microsoft = new Auth(Session::get("tenant_id"),Session::get("client_id"),  Session::get("client_secret"), Session::get("redirect_uri"), Session::get("scopes"));
        $tokens = $microsoft->getToken($_REQUEST['code'], Session::get("state"));

        $microsoft->setAccessToken($tokens->access_token);

        $user = (new User);


        if($user->data->getGivenName()){
            
            $data=array(
                "user"=>$user->data->getdisplayName(),
                "id"=>$user->data->getid(),
                "userPrincipalName"=>$user->data->getuserPrincipalName(),
            
            );

            $_SESSION["usuario"]=$data;
           
            $data=serialize( $data);
            $data= base64_encode($data);

       
            session(["users"=> $data]);
            return redirect()->route('estudiantes');
          
        }



    }


    public function sign_in(){
        session_start();
        session_destroy();

        session_start();
        
        // data para crear url
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
     
      session(["inicio_microsoft"=>$_SESSION['adnanhussainturki/microsoft']]);
    
        return Redirect::to($microsoft->getAuthUrl());
     
    }

}
