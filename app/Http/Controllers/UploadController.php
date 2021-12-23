<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\uploadModel;

class UploadController extends Controller
{
    protected $upload;

    public function __construct(uploadModel $upload)
    {
        $this->upload = $upload;
    }

    public function index(){
       
      $data["archivo"] = uploadModel::obtenerDocumentos();
     
      foreach ( $data["archivo"] as $key => $value) {
     
        if($data["archivo"][$key]->category==0){
            $data["archivo"][$key]->category="Capsulas";
         
        }else if($data["archivo"][$key]->category==1){
             $data["archivo"][$key]->category="Manuales";
          
        }else{
             $data["archivo"][$key]->category="Institucional";
       
        }

        if($data["archivo"][$key]->plataforma==0){
            $data["archivo"][$key]->plataforma="Docentes";
     
        }else {
             $data["archivo"][$key]->plataforma="Estudiantes";
        }

        
      }
      //exit;
     
        return view('upload.index', $data);
    }

    public function create()
    {
        $Categorias=array(
            '0'=>"Capsulas",
            '1'=>"Manuales",
            '2'=>"Institucional"
        );
        $plataforma=array(
            '0'=>"Docentes",
            '1'=>"Estudiantes",
        );

      
        return view('upload.crear',compact('Categorias','plataforma'));
    }

    public function store(Request $request){


        $data=request()->except("_token");

        if($data["category"]==0){
            $data["imagen"]="img/capsulas.png";

        }else if($data["category"]==1)
        {
            $data["imagen"]="img/Manuales.jpg";
        }else{
            $data["imagen"]="img/institucional.jpg";;
        }
        date_default_timezone_set("America/Bogota");
        $data["created_at"]=new \DateTime(); 
        // print_r($data);
        // exit;
      
        uploadModel::insert($data);
      
        return redirect("upload");

    }
    public function destroy( $id){
        uploadModel::destroy($id);
        return redirect("upload");
       
    }

    public function edit($id){

         $Categorias=array(
            '0'=>"Capsulas",
            '1'=>"Manuales",
            '2'=>"Institucional"
        );
        $plataforma=array(
            '0'=>"Docentes",
            '1'=>"Estudiantes",
        );

        $archivo=uploadModel::obteneruploadPorId($id);
    
         
            
        return view('upload.editar',compact(['archivo','Categorias','plataforma']));
    }

    public function update(Request  $request,$id){
      
        $data=request()->except(["_token",'_method']);
        if($data["category"]==0){
            $data["imagen"]="img/capsulas.png";

        }else if($data["category"]==1)
        {
            $data["imagen"]="img/Manuales.jpg";
        }else{
            $data["imagen"]="img/institucional.jpg";;
        }
        date_default_timezone_set("America/Bogota");
        $data["updated_at"]=new \DateTime(); 
        // print_r($data);
        // exit;
        // print_r($data);
        // exit;
        uploadModel::where('id','=',$id)->update($data);
        $archivo=uploadModel::findOrfail($id);
        
        return redirect("upload");
    }
}
