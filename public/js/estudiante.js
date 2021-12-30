
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
    
    
  
    
    const search=document.querySelector("#inputSearch");
    const resultado=document.querySelector("#resultado");
    
    
    var contador=0;
    const filtrar= ()=>{
        resultado.innerHTML='';
        
        const texto= search.value.toLowerCase();
        for(var document of documentos ){
                      var nombre=document.nombreArchivo.toLowerCase();
            if(nombre.indexOf(texto) !==-1){
               
                resultado.innerHTML+=`
                <div class="card product-item col-md-3 col-sm-6"  category="${document.category}" style="text-align: center;max-height: 100%; padding-left: 0;padding-right: 0;">
                    <img class="card-img-top" src="${document.imagen}" alt="Card image cap" >
                    <div class="card-body">
                        <h5 class="card-title">${document.nombreArchivo}</h5>
                        <p class="card-text">${document.descripcion?document.descripcion:""}</p>

                        
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


    // Getter
var onChange = $(".rateYo").rateYo("option", "onChange"); //returns the function
 
// Setter
// $(".rateYo").rateYo("option", "onChange", function () {
  
//  $id=$(this).attr("id");
//     console.log( $id);
// }); //returns a jQuery Element
    // $(".rateYo").rateYo({
        
    //     onChange: function (rating, rateYoInstance) {
     
    //      console.log(rating);
    //     }
    //   });

    // Getter
    var onChange = $(".rateYo").rateYo("option", "onChange"); //returns the function
    
    // Setter
    $(".rateYo").rateYo("option", "onChange", function (rating, rateYoInstance) {
    
       
      console.log(rating);
      console.log(rateYoInstance);
        }); //returns a jQuery Element

 

    // $(".rateYo").rateYo()
    // .on("rateyo.change", function (e, data) {

    //   var rating = data.rating;
    //   $(this).next().text(rating);

    //   console.log(rating);
    //   console.log(data);
    // });

    
});