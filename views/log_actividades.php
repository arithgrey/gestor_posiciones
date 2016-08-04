<div class="row">
    <div>
        <div class='p-oculpar'>         
            ocultar
            <i class="fa fa-chevron-down" aria-hidden="true"></i>
        </div>
        <div class='p-mostrar'>            
            Últimas actividades
            <i class="fa fa-chevron-up" aria-hidden="true">
            </i>           
        </div>
        <div class='p-ultimas'> 



            <div class='img-load-panel-log' >
                <div class="container">
                    <div class="row">
                        <h3>
                            Cargando ....
                        </h3>
                        <div class="progress progress-striped active page-progress-bar">
                            <div class="progress-bar" style="width: 100%;"></div>
                        </div>
                    </div>
                </div>
                </div>

            <div class='contenedor-log'></div>                     
        </div>
    </div>
</div>


    

<style type="text/css">
.img-load-panel-log{
    display: none;
}
.contenedor-log{
    display: none;
}
.p-ultimas{
    margin-right: 50px;
    font-size: .9em;
    position: fixed;
    bottom: 30px;
    left: 10px;
    width: 100%;
}
.p-oculpar{
    margin-right: 50px;
    font-size: .9em;
    position: fixed;
    bottom: 10px;
    left: 10px;
    width: 100%;
    display: none;
    z-index: 100;
}
.p-mostrar{
    margin-right: 50px;
    font-size: .9em;
    position: fixed;
    bottom: 10px;
    left: 10px;
    width: 100%;
   
}

.p-ultimas:hover{
    cursor: pointer;
}

.p-ultimas:hover   .contenedor_log {
   background: #F9F9F9;
}
.contenedor-log{
    height: 230px;
    width: 100%;
    background:#CCCCCB;
}
</style>


<script type="text/javascript">
$(document).ready(function(){
    $(".p-mostrar").click(carga_log_actividades);  
    $(".p-oculpar").click(oculata_contenedor);    

});

function oculata_contenedor(){
    $(".contenedor-log").hide();  
    $(".p-mostrar").show();
     $(".p-oculpar").hide();
}
function carga_log_actividades(){   

    $(".contenedor-log").show();    
    $(".p-oculpar").show();
    $(".p-mostrar").hide();
    url = "controller/log.php"; 
    $.ajax({
        url :  url , 
        type :  "GET", 
        beforeSend: function(data){

            $(".img-load-panel-log").show();
        }
    }).done(function(data){
        $(".contenedor-log").empty();
        $(".contenedor-log").html(data);
        $(".img-load-panel-log").hide();
    }).fail(function(){
        $(".contenedor-log").html("Error al cargar log de actividades, reporte a jgovindams@grupokonecta.com");
        $(".img-load-panel-log").hide();
    });


}
</script>
