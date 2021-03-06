<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>IBERO-Estudiantes</title>
        <link rel="icon" href="https://aulavirtual.ibero.edu.co/iberov-3/pluginfile.php/1/theme_adaptable/favicon/1637342001/xdxdxdxd.gif">

        <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="css/estudiante.css">
      
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">

        <link href="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-star-rating@4.1.2/css/star-rating.min.css" media="all" rel="stylesheet" type="text/css" />

        <!-- default styles -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css">
<link href="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-star-rating@4.1.2/css/star-rating.min.css" media="all" rel="stylesheet" type="text/css" />

<!-- with v4.1.0 Krajee SVG theme is used as default (and must be loaded as below) - include any of the other theme CSS files as mentioned below (and change the theme property of the plugin) -->
<link href="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-star-rating@4.1.2/themes/krajee-svg/theme.css" media="all" rel="stylesheet" type="text/css" />



    </head>
    <body>

        <!--Header - menu-->
        <header>

            <div class="header-content">

                <div class="logo">
                    <h1 style="color: #ffb700;">IBERO-<b>Estudiantes</b></h1>
                </div>
                <div class="menu" id="show-menu">

                    <nav>
                        <ul>
                            <li>
                                <h6 style=" margin-top: 6%;"id="userName" ></h6>
                            </li>
                            <li>
                                <a id="mectrl_body_signOut" class="mectrl_resetStyle mectrl_signout mectrl_truncate" aria-label="Cerrar sesi??n en esta cuenta" href="https://www.office.com/estslogout?ru=%2F" target="_top">Cerrar sesi??n
                                
                                </a>
                            </li>
                            <li>
                            <a id="singin" class="c-logo c-sgl-stk-uhfLogo" itemprop="url" href="{{ route('sign_in') }}" aria-label="Microsoft" >
                                    <img src="https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RE1Mu3b?ver=5c31" style="width: 53%;" >
                                </a>
                            </li>
                        
                        </ul>
                    </nav>

                    </div>



                <div id="ctn-icon-search">
                  
                   
                    <i class="fas fa-search" id="icon-search"></i>
                </div>

            </div>

            <div id="icon-menu">
                <i class="fas fa-bars"></i>
            </div>

        </header>

        <div id="ctn-bars-search">
            <input type="text" id="inputSearch" placeholder="??Qu?? deseas buscar?">
        </div>

        <ul id="box-search">
            <li><a href="#"><i class="fas fa-search"></i>Documentos</a></li>
            <li><a href="#"><i class="fas fa-search"></i>Manual del tutor</a></li>
            <li><a href="#"><i class="fas fa-search"></i>Tutoriales</a></li>
        </ul>

        <div id="cover-ctn-search"></div>

      
       
          

        <div class="container" id="move-content">
            <!-- slider  -->
            <section>

                <div id="slider_inicial" class="carousel slide pointer-event" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#slider_inicial" data-slide-to="0" class=""></li>
                        <li data-target="#slider_inicial" data-slide-to="1" class="active"></li>
                        <li data-target="#slider_inicial" data-slide-to="2" class=""></li>
                    </ol>
                    <div class="carousel-inner" >
                        <div class="carousel-item">
                            <img  class="d-block w-100" src="./img/estudiante1.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item active">
                            <img  class="d-block w-100" src="./img/estudiante2.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img  class="d-block w-100" src="./img/estudiante3.jpg" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#slider_inicial" role="button" data-slide="prev" style="
                    background: #322e2b9c;
                ">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a style="
                      background: #322e2b9c;
                  " class="carousel-control-next" href="#slider_inicial" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                </div>
            </section>

            <div class="container">

            <input type="radio" id="TODOS" name="categories" value="TODOS" checked>
           
         
                <div class="container-category">
                    <label class="category_item ct_item-active" category="all">TODOS</label>
                    <label class="category_item" category="2">Doc Institucionales</label>
                    <label class="category_item" category="1">Manuales</label>
                    <label class="category_item" category="0">Capsulas</label>
                </div>
                <div class="container">
                    <div class="row" id="resultado">

                    </div>
                </div>
            </div>

        </div>
        
      

        <div class="container-footer" style="background-color: #303030;color: white;">	

            <footer>
                <img src="./img/logo.png" alt="" srcset="" style="margin-top: 3%;" class="col-md-2">
                <p style="text-align: center;margin-top: -7%;z-index: 0;font-size: 15px;" class=""><span style=""><strong>CORPORACI??N UNIVERSITARIA IBEROAMERICANA<br> De: PLANETA FORMACI??N Y UNIVERSIDADES</strong></span></p>
                <p style="text-align: center;">Calle 67 No 5 - 27&nbsp; Bogot?? - Colombia.</p>
                
                
                <p align="center"><span><a href="mailto:servicioalestudiante@iberoamericana.edu.co"></a></span>_______________________________________</p>
                <p style="text-align: center;"><span style="font-family: 'times new roman', times, serif;">Instituci??n de Educaci??n Superior sujeta a inspecci??n y vigilancia por el Ministerio de Educaci??n Nacional</span></p>
            
            
            

            </footer>

        </div>

        <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-body" style="padding: 0;">
                    <div class="container" style="padding: 0;background-color: black;">
                        <iframe class="responsive-iframe" id="iframe" src="" style="background-color: black;height: 28rem;width: 100%;border-width: 0;border: 0;
                        padding: 0;margin-top: 0%;padding-bottom: -5%;">
                        </iframe>
                      </div>
                  </div>
                </div>
               
            </div>
          </div>
    
         
      <script>
          
        const data = (<?php echo json_encode($data); ?>)
        const documentos = (<?php echo json_encode($archivo); ?>);
      </script>
       
<!-- important mandatory libraries -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-star-rating@4.1.2/js/star-rating.min.js" type="text/javascript"></script>

<!-- with v4.1.0 Krajee SVG theme is used as default (and must be loaded as below) - include any of the other theme JS files as mentioned below (and change the theme property of the plugin) -->
<script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-star-rating@4.1.2/themes/krajee-svg/theme.js"></script>

<!-- optionally if you need translation for your language then include locale file as mentioned below (replace LANG.js with your own locale file) -->
<script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-star-rating@4.1.2/js/locales/LANG.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
        <script src="js/estudiante.js"></script>
    </body>
</html>

