<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carga de documentos y videos plataformas</title>


    <link rel="icon" href="https://aulavirtual.ibero.edu.co/iberov-3/pluginfile.php/1/theme_adaptable/favicon/1637342001/xdxdxdxd.gif">
    <link rel="stylesheet" href="css/upload.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">

</head>
<body>

    <div class="card w-75">
        <h5 class="center card-title">Carga de documentos y videos plataformas</h5>
        <div class="card-body">
            <form method="post" enctype="multipart/form-data">
        
		'creadoPor',
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" for="form3Example1">nombreArchivo</label>
                            <input name="nombreArchivo" type="text" id="nombreArchivo" class="form-control" />
                        
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" for="url">url del iframe</label>
                            <input type="text" name="url" id="url" class="form-control" />
                            
                        </div>
                    </div>
                    
                </div>

                <!-- Email input -->
                <div class="form-outline mb-4">
                    <div class="col">
                        <div class="custom-file">
                            <label class="form-label" for="imagen">descripcion</label><br>
                            <textarea type="text" id="imagen" name="imagen" class="" />
                        </div>
                    </div>

                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" for="form3Example4">category</label>
                            <input type="password" id="form3Example4" class="form-control" />
                        </div>
                    </div>

                  
                </div>

                

                <!-- Password input -->
                <div class="form-outline mb-4">

                <div class="col">
                        <div class="custom-file">
                            <label class="form-label" for="imagen">imagen</label><br>
                            <input type="file" id="imagen" name="imagen" class="" />
                        </div>
                    </div>
                  
                </div>

                <!-- Checkbox -->
                <div class="form-check d-flex justify-content-center mb-4">
                    <input
                    class="form-check-input me-2"
                    type="checkbox"
                    value=""
                    id="form2Example33"
                    checked
                    />
                    <label class="form-check-label" for="form2Example33">
                    Subscribe to our newsletter
                    </label>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">Sign up</button>

                <!-- Register buttons -->
                <div class="text-center">
                    <p>or sign up with:</p>
                    <button type="button" class="btn btn-primary btn-floating mx-1">
                    <i class="fab fa-facebook-f"></i>
                    </button>

                    <button type="button" class="btn btn-primary btn-floating mx-1">
                    <i class="fab fa-google"></i>
                    </button>

                    <button type="button" class="btn btn-primary btn-floating mx-1">
                    <i class="fab fa-twitter"></i>
                    </button>

                    <button type="button" class="btn btn-primary btn-floating mx-1">
                    <i class="fab fa-github"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
</body>
</html>