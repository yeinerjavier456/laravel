@include('header');

<title>Archivos</title>
    <div class="container pt-3">
        <div class="row">
            <div class="mx-auto">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered ">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col" > Archivo</th>
                                <th scope="col" > url</th>
                                <th scope="col" > imagen</th>
                                <th scope="col" > category</th>
                                <th scope="col" > descripcion</th>
                                <th scope="col" >Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($uploads as $upload)
                            <tr>
                            <td>{{ $upload->nombreArchivo }}</td>
                            <td>{{ $upload->url }}</td>
                            <td>{{ $upload->imagen }}</td>
                            <td>{{ $upload->category }}</td>
                            <td>{{ $upload->descripcion }}</td>
                            <td>Editar {{ $upload->id  }} |
                                    <form action="{{ url('/upload/'.$upload->id) }}" method="POST">
                                        <!-- nesesario paraa laravel -->
                                        @csrf;
                                        {{method_field('DELETE')}}
                                        <input type="submit" value="Eliminar" class="btn btn-sm btn-danger" onclick="return confirm(`¿Desea eliminar el Archivo?`)">
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