@include('header');
<title>Carga de documentos y videos plataformas</title>


<link rel="stylesheet" href="css/upload.css">

    

    <div class="card w-75" style="margin-left: 15%;margin-top: 8%;">
        <h5 class=" card-title" style="margin-left: 29%;">Carga de documentos y videos plataformas</h5>
        <div class="card-body">
            <form action="{{ url('/upload') }}"  method="post" enctype="multipart/form-data">
            @csrf
            @include('upload.form')
             

                <button type="submit" class="btn btn-primary btn-block mb-4">Guardar Datos</button>
            </form>
        </div>
    </div>


   
    <script src="js/upload.css"></script>
    
    @include('footer');