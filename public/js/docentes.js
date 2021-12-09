$(document).ready(function(){
    document.getElementById("icon-menu").addEventListener("click", mostrar_menu);
    
    function mostrar_menu(){
    
        document.getElementById("move-content").classList.toggle('move-container-all');
        document.getElementById("show-menu").classList.toggle('show-lateral');
    }
    
    //Buscador de contenido
    
    
    //Ejecutando funciones
    document.getElementById("icon-search").addEventListener("click", mostrar_buscador);
    document.getElementById("cover-ctn-search").addEventListener("click", ocultar_buscador);
    
    //Declarando variables
    bars_search =       document.getElementById("ctn-bars-search");
    cover_ctn_search =  document.getElementById("cover-ctn-search");
    inputSearch =       document.getElementById("inputSearch");
    box_search =        document.getElementById("box-search");
    
    
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
    
    
    //Creando filtrado de busqueda
    
    // reemplazar por resultado de la base de datos
    const documentos=[
    
        {  
            nombre:"Misión ",
            url:"https://www.ibero.edu.co/documentos/#1600969179236-4c988300-6bd3",
            imagen:"img/document.jpg",
            category:"Institucionales",
             descripcion:"",
    
        },
        {
            nombre:"Visión "                   ,
            url:"https://www.ibero.edu.co/documentos/#1600969179267-7424b7c7-bb64", 
            imagen:"img/document.jpg",
            category:"Institucionales",
             descripcion:"",
        },
        {
            nombre:"Filosofía Institucional",
            url:"https://www.ibero.edu.co/documentos/#1600969242228-48ec0493-db58",
            imagen:"img/document.jpg",
            category:"Institucionales",
             descripcion:"",
        },
        {
            nombre:"Valores Institucionales",
            url:"https://www.ibero.edu.co/documentos/#1600969276799-de37b446-5382",
            imagen:"img/document.jpg",
            category:"Institucionales",
             descripcion:"",
        },
        {
            nombre:"Principios Institucionales",
            url:"https://www.ibero.edu.co/documentos/#1600969301837-48047705-3ee0",
            imagen:"img/document.jpg",
            category:"Institucionales",
             descripcion:"",
        },
        {
            nombre:"PEI",
            url:" https://www.ibero.edu.co/wp-content/uploads/2020/06/PEI.pdf",
            imagen:"img/document.jpg",
            category:"Institucionales",
             descripcion:"",
        },
        {
            nombre:"Lineamientos Curriculares",
            url:" https://app.box.com/s/v0mtnl2grvdw5ksyfi0tjiidcca89515",
            imagen:"img/document.jpg",
            category:"Institucionales",
             descripcion:"",
        },
        {
            nombre:"Manual del tutor virtual",
            url:" https://aulavirtual.ibero.edu.co/recursosel/Manuales/ManualdelTutorVirtual.pdf",
            imagen:"img/document.jpg",
            category:"Manuales",
             descripcion:"",
        },
        {
            nombre:"Estructura Cursos formato 2021",
            url:"https://view.genial.ly/6165f559ed4c430d8826ba22",
            imagen:"img/document.jpg",
            category:"Manuales",
             descripcion:"",
        },
        {
            nombre:"Cambio de fecha de una tarea",
            url:"https://player.vimeo.com/video/413579489?h=14f906d936",
            imagen:"img/Mesa de trabajo 1.png",
            category:"Capsulas",
             descripcion:"",
        },
        {
            nombre:"Ingreso y Consulta Portal de Revistas Institucionales IBERO",
            url:"https://player.vimeo.com/video/415143397?h=e278aa9d58",
            imagen:"img/Mesa de trabajo 1.png",
            category:"Capsulas",
             descripcion:"",
        },
        {
            nombre:" Gestión Tutorial Cambio de fecha de un cuestionario",
            url:"https://player.vimeo.com/video/413579839?h=061d31a41e",
            imagen:"img/Mesa de trabajo 1.png",
            category:"Capsulas",
             descripcion:"",
        },
        {
            nombre:"Cambiar la fecha de una tarea para uno o varios estudiantes.",
            url:"https://player.vimeo.com/video/415139450?h=496171ff35",
            imagen:"img/Mesa de trabajo 1.png",
            category:"Capsulas",
             descripcion:"",
        },
       
    
    ]
    
    const search=document.querySelector("#inputSearch");
    const resultado=document.querySelector("#resultado");
    
    
    const filtrar= ()=>{
        resultado.innerHTML='';
        console.log(search.value);
        const texto= search.value.toLowerCase();
        for(var document of documentos ){
            var nombre=document.nombre.toLowerCase();
            if(nombre.indexOf(texto) !==-1){
               
                resultado.innerHTML+=`
                    <div class="card product-item"  category="${document.category}" style="text-align: center;">
                        <img class="card-img-top" src="${document.imagen}" alt="Card image cap" >
                        <div class="card-body">
                            <h5 class="card-title">${document.nombre}</h5>
                            <p class="card-text">${document.descripcion}</p>
                           
                        </div>
                        <div class="card-footer bg-transparent"> <button type="button" class="btn btn-lg btn-block ejemplo2"  data-toggle="modal" data-target="#exampleModal"  data-url="${document.url}">Abrir</button></div>
                    </div>
                       `
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
        console.log(catProduct);
    
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
    
    });
    
    