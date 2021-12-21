@include('header');
<title>Editar documentos y/o video plataforma</title>

<a type="button" class="btn btn-primary" href="{{url('upload')}}"rel="noopener noreferrer">Ver Registros</a>


<link rel="stylesheet" href="css/upload.css">

    

    <div class="card w-75" style="margin-left: 15%;margin-top: 8%;">
        <h5 class=" card-title" style="margin-left: 29%;">Editar documentos y/o video plataforma</h5>
        <div class="card-body">
            <form action="{{ url('upload/'.$archivo->id) }}"  method="post" enctype="multipart/form-data">
            @csrf
           
            {{method_field('PATCH')}}
            @include('upload.form')
             

                <button type="submit" class="btn btn-primary btn-block mb-4">Actualizar Datos</button>
            </form>
        </div>
    </div>


   
    <script src="js/upload.css"></script>
    
    @include('footer');