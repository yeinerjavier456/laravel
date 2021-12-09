<?php

session_start(); // Important
require "../vendor/autoload.php";

use myPHPnotes\Microsoft\Auth;

$tenant = "common"; 
$client_id = "0d7b0a73-c487-443c-8ac1-32e9b959c5ab";
$client_secret = "GcZ7Q~4GJ2FbUoT2QbQZ4FFsT36q3hZZr6yu1";
$scopes = [
            "User.Read",
            'Files.Read.All',
           
        ];
$callback = "http://localhost/ibero/public/callback.php";
//https://aulavirtual.ibero.edu.co/repositorio/sitios/estudiantes/callback.php

$microsoft = new Auth($tenant, $client_id,  $client_secret, $callback, $scopes);
header("location: ". $microsoft->getAuthUrl()); //Redirecting to get access token

?>