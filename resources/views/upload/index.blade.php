@include('header');

<a type="button" class="btn btn-primary" href="{{url('upload/create')}}"rel="noopener noreferrer">Nuevo Registro</a>

<title>Archivos</title>


<script>
    console.log(<?php  $data; ?> }});
</script>



    <div class="container pt-3">
        <div class="row">
            <div class="mx-auto">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered ">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col" > Archivo</th>
                                <th scope="col" > url</th>
                             
                                <th scope="col" > category</th>
                                <th scope="col" > descripcion</th>
                                <th scope="col" > plataforma</th>
                                <th scope="col" >Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($archivo as $up)
                            <tr>
                            <td>{{ $up->nombreArchivo }}</td>
                            <td>{{ $up->url }}</td>
                            <td>{{ $up->category }}</td>
                            <td>{{ $up->descripcion }}</td>
                            <td>{{ $up->plataforma }}</td>
                            <td>
                                <a href="{{ url('upload/'.$up->id.'/edit') }}"  class="btn  btn-primary" style="min-width: 5rem; margin-bottom: 10%;">
                              
                                        Editar
                                </a>
                              
                                    <form action="{{ url('upload/'.$up->id) }}" method="POST">
                                        <!-- nesesario paraa laravel -->
                                        @csrf
                                        {{method_field('DELETE')}}
                                        <input type="submit" value="Eliminar" class="btn  btn-danger" onclick="return confirm(`¿Desea eliminar el Archivo?`)">
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>


   

    @include('footer');