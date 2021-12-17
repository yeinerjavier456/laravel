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
       
        $upload =  $this->upload->obtenerDocumentos();
     
        return view('upload.index',['uploads' => $upload]);
    }

    public function create()
    {
        return view('upload.crear');
    }

    public function salvar(){

        return view('upload.index');
    }
    public function destroy(){

        return view('upload.index');
    }
}
