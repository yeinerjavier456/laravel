
@include('header');

        <title>IBERO-Docentes</title>
   

        <link rel="stylesheet" href="css/docentes.css">
      

        <!--Header - menu-->
        <header>

            <div class="header-content">

                <div class="logo">
                    <h1 style="color: #ffb700;">IBERO-<b>Docentes</b></h1>
                </div>

                <div class="menu" id="show-menu">

                    <nav>
                        <ul>
                            <li>
                                <a href="#"> 
                                    Inicio
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
            <input type="text" id="inputSearch" placeholder="¿Qué deseas buscar?">
        </div>

        <ul id="box-search">
            <li><a href="#"><i class="fas fa-search"></i>Documentos</a></li>
            <li><a href="#"><i class="fas fa-search"></i>Manual del tutor</a></li>
            <li><a href="#"><i class="fas fa-search"></i>Capsulas</a></li>
        </ul>

        <div id="cover-ctn-search"></div>

        <div class="container-all" id="move-content">
            <!-- slider  -->
            <section>
                <div id="slider_inicial" class="carousel slide pointer-event" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#slider_inicial" data-slide-to="0" class=""></li>
                        <li data-target="#slider_inicial" data-slide-to="1" class="active"></li>
                        <li data-target="#slider_inicial" data-slide-to="2" class=""></li>
                    </ol>
                    <div class="carousel-inner" style=" height: 30rem;">
                        <div class="carousel-item">
                            <img  class="d-block w-100" src="./img/docente1.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item active">
                            <img  class="d-block w-100" src="./img/docente2.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img  class="d-block w-100" src="./img/docente3.jpg" alt="Third slide">
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

            <div class="container-post">

            <input type="radio" id="TODOS" name="categories" value="TODOS" checked>
           
              

                <div class="container-category">
                    <label class="category_item ct_item-active" category="all">TODOS</label>
                    <label class="category_item" category="Institucionales">Doc Institucionales</label>
                    <label class="category_item" category="Manuales">Manuales</label>
                    <label class="category_item" category="Capsulas">Capsulas</label>
                </div>

                <div class="posts" id="resultado">

                </div>

            </div>

        </div>

        <div class="container-footer" style="background-color: #303030;color: white;">	

            <footer>
                <img src="./img/logo.png" alt="" srcset="" style="margin-top: 3%;" class="col-md-2">
                <p style="text-align: center;margin-top: -7%;z-index: 0;font-size: 15px;" class=""><span ><strong>CORPORACIÓN UNIVERSITARIA IBEROAMERICANA<br> De: PLANETA FORMACIÓN Y UNIVERSIDADES</strong></span></p>
                <p style="text-align: center;">Calle 67 No 5 - 27&nbsp; Bogotá - Colombia.</p>
                
                
                <p align="center"><span><a href="mailto:servicioalestudiante@iberoamericana.edu.co"></a></span>_______________________________________</p>
                <p style="text-align: center;"><span style="font-family: 'times new roman', times, serif;">Institución de Educación Superior sujeta a inspección y vigilancia por el Ministerio de Educación Nacional</span></p>
            
            
            

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

      
       

    
        <script src="js/docentes.js"></script>

        @include('footer');
