
$(document).ready(function(){
   

    document.getElementById("icon-menu").addEventListener("click", mostrar_menu);
  
    //Buscador de contenido
    if(data.length === 0){
        $("#singin").removeClass("hidden");
        $("#mectrl_body_signOut").addClass("hidden");
        $("#userName").empty();
    }else{
        $("#userName").empty();
        $("#userName").append(data.user);
        $("#singin").addClass("hidden");
    }
   
// $("#logaut").on("click",function(){
//     $.ajax({
//         method: "GET",
//         url: "http://...../"
//       }).done(function(data) {
//         alert(data); // imprimimos la respuesta
//       }).fail(function() {
//         alert("Algo salió mal");
//       }).always(function() {
//         alert("Siempre se ejecuta")
//       });
// })
   
    
    //Ejecutando funciones
    document.getElementById("icon-search").addEventListener("click", mostrar_buscador);
    document.getElementById("cover-ctn-search").addEventListener("click", ocultar_buscador);
    
    //Declarando variables
    bars_search =       document.getElementById("ctn-bars-search");
    cover_ctn_search =  document.getElementById("cover-ctn-search");
    inputSearch =       document.getElementById("inputSearch");
    box_search =        document.getElementById("box-search");
    
    
    // reemplazar por resultado de la base de datos
    const documentos=[
    
        // {  
        //     nombre:"Misión ",
        //     url:"https://www.ibero.edu.co/documentos/#1600969179236-4c988300-6bd3",
        //     imagen:"img/document.jpg",
        //     category:"Institucionales",
        //      descripcion:"", id:"4"
            
        // },
        // {
        //     nombre:"Visión "                   ,
        //     url:"https://www.ibero.edu.co/documentos/#1600969179267-7424b7c7-bb64", 
        //     imagen:"img/document.jpg",
        //     category:"Institucionales",
        //      descripcion:"", id:"4"

        // },
        // {
        //     nombre:"Filosofía Institucional",
        //     url:"https://www.ibero.edu.co/documentos/#1600969242228-48ec0493-db58",
        //     imagen:"img/document.jpg",
        //     category:"Institucionales",
        //      descripcion:"", id:"4"

        // },
        // {
        //     nombre:"Valores Institucionales",
        //     url:"https://www.ibero.edu.co/documentos/#1600969276799-de37b446-5382",
        //     imagen:"img/document.jpg",
        //     category:"Institucionales",
        //      descripcion:"", id:"4"

        // },
        // {
        //     nombre:"Principios Institucionales",
        //     url:"https://www.ibero.edu.co/documentos/#1600969301837-48047705-3ee0",
        //     imagen:"img/document.jpg",
        //     category:"Institucionales",
        //      descripcion:"", id:"4"

        // },
        {
            nombre:"Reglamento estudiantil",
            url:"https://app.box.com/s/xkvms20acdbbgwbw4j23qfzp58x7l5p9",
            imagen:"img/document.jpg",
            category:"Institucionales",
             descripcion:"", 
            id:"1"

        },
        {
            nombre:"Modelo Pedagógico",
            url:"https://www.ibero.edu.co/wp-content/uploads/2020/08/Modelo-Pedag%C3%B3gico_compressed.pdf",
            imagen:"img/document.jpg",
            category:"Institucionales",
             descripcion:"", 
            id:"2"

        },
        {
            nombre:"Estructura Cursos 2018",
            url:"https://aulavirtual.ibero.edu.co/recursosel/Manuales/Manual_estudiante.pdf",
            imagen:"img/document.jpg",
            category:"Manuales",
             descripcion:"",
            id:"3"
        },
        {
            nombre:"Estructura Cursos formato 2021",
            url:"https://view.genial.ly/6165f559ed4c430d8826ba22",
            imagen:"img/document.jpg",
            category:"Manuales",
             descripcion:"", 
            id:"4"

        },
        {
            nombre:"Restablecimiento contraseña",
            url:"tutorial_password_mrooms.pdf",
            imagen:"img/document.jpg",
            category:"Manuales",
             descripcion:"", 
            id:"5"
        },
        {
            nombre:"Cómo acceder al aula  virtual",
            url:"https://player.vimeo.com/video/578554276",
            imagen:"img/Mesa de trabajo 1.png",
            category:"Capsulas",
             descripcion:"", 
            id:"6"
        },
        {
            nombre:"restablecer contraseña en aula virtual",
            url:"https://player.vimeo.com/video/578554109",
            imagen:"img/Mesa de trabajo 1.png",
            category:"Capsulas",
             descripcion:"", 
            id:"7"
        },
        {
            nombre:"Dónde encontrar los cursos en el Aula virtual",
            url:"https://player.vimeo.com/video/578554418",
            imagen:"img/Mesa de trabajo 1.png",
            category:"Capsulas",
             descripcion:"", 
            id:"8"
        },
        {
            nombre:"Acta compromiso",
            url:"https://player.vimeo.com/video/546711739",
            imagen:"img/Mesa de trabajo 1.png",
            category:"Capsulas",
             descripcion:"", 
            id:"9"
        },
        {
            nombre:"¿Cómo cargo una actividad?",
            url:"https://player.vimeo.com/video/578601821",
            imagen:"img/Mesa de trabajo 1.png",
            category:"Capsulas",
             descripcion:"",
            id:"10"
        },
        {
            nombre:"¿Cómo reviso fechas de entrega?",
            url:"https://player.vimeo.com/video/578601053",
            imagen:"img/Mesa de trabajo 1.png",
            category:"Capsulas",
             descripcion:"", 
            id:"11"
        },
        {
            nombre:"¿Qué es un foro de acompañamiento?",
            url:"https://player.vimeo.com/video/578601184",
            imagen:"img/Mesa de trabajo 1.png",
            category:"Capsulas",
             descripcion:"",
            id:"12"
        },
        {
            nombre:"¿Cómo usar el servicio de mensajeria?",
            url:"https://player.vimeo.com/video/578601248",
            imagen:"img/Mesa de trabajo 1.png",
            category:"Capsulas",
             descripcion:"", 
            id:"13"
        },
        {
            nombre:"¿Cómo accedo a clases a través de teams? ",
            url:"https://player.vimeo.com/video/578601348",
            imagen:"img/Mesa de trabajo 1.png",
            category:"Capsulas",
             descripcion:"", 
            id:"14"
        },
        {
            nombre:"¿Cómo reviso mis calificaciones y retroalimentaciones?",
            url:"https://player.vimeo.com/video/578601407",
            imagen:"img/Mesa de trabajo 1.png",
            category:"Capsulas",
             descripcion:"", 
            id:"15"
        },
        {
            nombre:"¿Qué es el postest y en dónde lo encuentro?",
            url:"https://player.vimeo.com/video/578601535",
            imagen:"img/Mesa de trabajo 1.png",
            category:"Capsulas",
             descripcion:"", 
            id:"16"
        },
        {
            nombre:"¿Qué son los test finales de la unidad?",
            url:"https://player.vimeo.com/video/578601496",
            imagen:"img/Mesa de trabajo 1.png",
            category:"Capsulas",
             descripcion:"", 
            id:"17"
        },
        {
            nombre:"¿Qué es la encuesta AVA?",
            url:"https://player.vimeo.com/video/578601589",
            imagen:"img/Mesa de trabajo 1.png",
            category:"Capsulas",
             descripcion:"", 
             id:"18"

        },
        {
            nombre:"Acceso a la plataforma MoodleRooms",
            url:"https://player.vimeo.com/video/578613094",
            imagen:"img/Mesa de trabajo 1.png",
            category:"Capsulas",
             descripcion:"", 
             id:"19"

        },
        {
            nombre:"Restablecer Contraseña en MoodleRooms",
            url:"https://player.vimeo.com/video/578613267",
            imagen:"img/Mesa de trabajo 1.png",
            category:"Capsulas",
             descripcion:"", 
             id:"20"

        },
        {
            nombre:"¿Dónde encontrar los cursos MoodleRooms?",
            url:"https://player.vimeo.com/video/578613424",
            imagen:"img/Mesa de trabajo 1.png",
            category:"Capsulas",
             descripcion:"", 
             id:"21"

        },
        {
            nombre:"Ingreso al ambiente",
            url:"https://player.vimeo.com/video/546676722",
            imagen:"img/Mesa de trabajo 1.png",
            category:"Capsulas",
             descripcion:"", 
             id:"22"

        },
        {
            nombre:"Datos acceso",
            url:"https://player.vimeo.com/video/546687654",
            imagen:"img/Mesa de trabajo 1.png",
            category:"Capsulas",
             descripcion:"", 
             id:"23"

        },
        {
            nombre:"Generalidades",
            url:"https://player.vimeo.com/video/546694773",
            imagen:"img/Mesa de trabajo 1.png",
            category:"Capsulas",
             descripcion:"", 
             id:"24"

        },
        {
            nombre:"Ingresar curso",
            url:"https://player.vimeo.com/video/546704624",
            imagen:"img/Mesa de trabajo 1.png",
            category:"Capsulas",
             descripcion:"", 
             id:"25"

        },
        {
            nombre:"Recurso interactivo",
            url:"https://player.vimeo.com/video/546708550",
            imagen:"img/Mesa de trabajo 1.png",
            category:"Capsulas",
             descripcion:"", 
             id:"26"

        },
        {
            nombre:"Aspectos generales",
            url:"https://player.vimeo.com/video/546709255",
            imagen:"img/Mesa de trabajo 1.png",
            category:"Capsulas",
             descripcion:"", 
             id:"27"

        },
        {
            nombre:"Qué es pretest",
            url:"https://player.vimeo.com/video/546717208",
            imagen:"img/Mesa de trabajo 1.png",
            category:"Capsulas",
             descripcion:"", 
             id:"28"

        },
        {
            nombre:"Foros",
            url:"https://player.vimeo.com/video/546717469",
            imagen:"img/Mesa de trabajo 1.png",
            category:"Capsulas",
             descripcion:"", 
             id:"29"

        },
        {
            nombre:"Estructura cursos",
            url:"https://player.vimeo.com/video/546735408",
            imagen:"img/Mesa de trabajo 1.png",
            category:"Capsulas",
             descripcion:"", 
             id:"30"

        },
        {
            nombre:"Actividad funcionamiento",
            url:"https://player.vimeo.com/video/546791038",
            imagen:"img/Mesa de trabajo 1.png",
            category:"Capsulas",
             descripcion:"", 
             id:"31"

        },
        {
            nombre:"Panel de control",
            url:"https://player.vimeo.com/video/546791786",
            imagen:"img/Mesa de trabajo 1.png",
            category:"Capsulas",
             descripcion:"", 
             id:"32"

        },
        {
            nombre:"Microsoft Teams",
            url:"https://player.vimeo.com/video/546792154",
            imagen:"img/Mesa de trabajo 1.png",
            category:"Capsulas",
             descripcion:"", 
             id:"33"

        },
        {
            nombre:"Despedida",
            url:"https://player.vimeo.com/video/546791935",
            imagen:"img/Mesa de trabajo 1.png",
            category:"Capsulas",
             descripcion:"", 
             id:"34"

        },
    
    ]


    $.ajax({
        url: "test.html",
        context: document.body
      }).done(function() {

        $( this ).addClass( "done" );
        
      });
    
    const search=document.querySelector("#inputSearch");
    const resultado=document.querySelector("#resultado");
    
    var contador=0;
    const filtrar= ()=>{
        resultado.innerHTML='';
        
        const texto= search.value.toLowerCase();
        for(var document of archivos ){
            var nombre=document.nombre.toLowerCase();
            if(nombre.indexOf(texto) !==-1){
               
                resultado.innerHTML+=`
                <div class="card product-item col-md-3 col-sm-6"  category="${document.category}" style="text-align: center;max-height: 100%; padding-left: 0;padding-right: 0;">
                    <img class="card-img-top" src="${document.imagen}" alt="Card image cap" >
                    <div class="card-body">
                        <h5 class="card-title">${document.nombre}</h5>
                        <p class="card-text">${document.descripcion}</p>

                        <div class="rateYo" id="${document.id}"></div>
                    </div>
                    <div class="card-footer bg-transparent"> <button type="button" class="btn btn-lg btn-block ejemplo2"  data-toggle="modal" data-target="#exampleModal"  data-url="${document.url}">Abrir</button></div>
                </div>
                   `
                   contador++
            }
        }
        if(resultado.innerHTML===''){
            resultado.innerHTML+=` <h2>Documento no encontrado</h2>`
        }
    }
    
    search.addEventListener('keyup',filtrar);
    filtrar();
    
    // AGREGANDO CLASE ACTIVE AL PRIMER ENLACE ====================
    $('.category_list .category_item[category="all"]').addClass('ct_item-active');
    
    // FILTRANDO PRODUCTOS  ============================================
    
    $('.category_item').click(function(){
        var catProduct = $(this).attr('category');
       
    
        // AGREGANDO CLASE ACTIVE AL ENLACE SELECCIONADO
        $('.category_item').removeClass('ct_item-active');
        $(this).addClass('ct_item-active');
    
        // OCULTANDO PRODUCTOS =========================
        $('.product-item').css('transform', 'scale(0)');
        function hideProduct(){
            $('.product-item').hide();
        } setTimeout(hideProduct,400);
    
        // MOSTRANDO PRODUCTOS =========================
        function showProduct(){
            $('.product-item[category="'+catProduct+'"]').show();
            $('.product-item[category="'+catProduct+'"]').css('transform', 'scale(1)');
        } setTimeout(showProduct,400);
    });
    
    // MOSTRANDO TODOS LOS PRODUCTOS =======================
    
    $('.category_item[category="all"]').click(function(){
        function showAll(){
            $('.product-item').show();
            $('.product-item').css('transform', 'scale(1)');
        } setTimeout(showAll,400);
    });
    
    $('#exampleModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var url = button.data('url') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
      
        modal.find('.modal-body #iframe').attr("src",url)
      })
    
  
    $(".clasificacion").find("input").change(function(){
        var valor = $(this).val()
        $(".clasificacion").find("input").removeClass("activo")
        $(".clasificacion").find("input").each(function(index){
           if(index+1<=valor){
            $(this).addClass("activo")
           }
           
        })
      })
      
    $(".clasificacion").find("label").mouseover(function(){
        var valor = $(this).prev("input").val()
        $(".clasificacion").find("input").removeClass("activo")
        $(".clasificacion").find("input").each(function(index){
            if(index+1<=valor){
            $(this).addClass("activo")
            }
            
        })
    })

    $(document).find(".rateYo").rateYo({
        numStars: 5,
        starWidth: "30px"
    });


    //Funcion para mostrar el buscador
    function mostrar_buscador(){

        bars_search.style.top = "80px";
        cover_ctn_search.style.display = "block";
        inputSearch.focus();
    
        if (inputSearch.value === ""){
            box_search.style.display = "none";
        }
    
    }
    
    //Funcion para ocultar el buscador
    function ocultar_buscador(){
    
        bars_search.style.top = "-10px";
        cover_ctn_search.style.display = "none";
        inputSearch.value = "";
        box_search.style.display = "none";
    
    }

    function mostrar_menu(){
    
        document.getElementById("move-content").classList.toggle('move-container-all');
        document.getElementById("show-menu").classList.toggle('show-lateral');
    }

    
});