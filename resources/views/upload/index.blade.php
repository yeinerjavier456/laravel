<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
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
                                <th scope="col" > creadoPor</th>
                                <th scope="col" >&nbsp;</th>
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
                            <td>{{ $upload->creadoPor }}</td>
                            <td>
                                    <form action="{{ route('uploads.destroy', $upload) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
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

    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</body>
</html>