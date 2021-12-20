@include('header');
<title>Carga de documentos y videos plataformas</title>


<link rel="icon" href="https://aulavirtual.ibero.edu.co/iberov-3/pluginfile.php/1/theme_adaptable/favicon/1637342001/xdxdxdxd.gif">
<link rel="stylesheet" href="css/upload.css">

    
<body>

    <div class="card w-75" style="margin-left: 15%;margin-top: 8%;">
        <h5 class=" card-title" style="margin-left: 29%;">Carga de documentos y videos plataformas</h5>
        <div class="card-body">
            <form action="{{ url('upload/salvar') }}"  method="post" enctype="multipart/form-data">
            @csrf
            @include('upload.form');
             

         
            </form>
        </div>
    </div>


   
    <script src="js/upload.css"></script>
    
    @include('footer');