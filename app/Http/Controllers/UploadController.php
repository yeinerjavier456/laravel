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

    public function store(Request $request){

        $data=request()->except("_token");
        uploadModel::insert($data);
        return response()->json($data);
        return view('upload.index');

    }
    public function destroy( $id){
        uploadModel::destroy($id);
        return redirect("upload");
       
    }
}
