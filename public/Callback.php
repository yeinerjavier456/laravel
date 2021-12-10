<?php



session_start(); 
require "../vendor/autoload.php";

use myPHPnotes\Microsoft\Auth;
use myPHPnotes\Microsoft\Handlers\Session;
use myPHPnotes\Microsoft\Models\User;
use Illuminate\Http\Request;


$data = $request->session()->all();
print_r($data );
exit;
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
   
    header("location:https://aulavirtual.ibero.edu.co/repositorio/sitios/estudiantes/?data= ". $data); 
}


?>