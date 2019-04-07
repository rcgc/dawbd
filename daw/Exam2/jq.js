/*global $*/
$(document).ready(function(){
    mostrarIncidentes();
    //carga selects para 
   /*$.get("cargarLugarSelects.php",function(data){
        $('#lugarSelect').html(data);
        M.AutoInit(); // se tiene que volver a inciar el componente de materialize...
    });*/
   /* $.ajax({
        type: "get",
        url: "cargarLugarSelects.php",
        success: function(opciones){
            $('#lugarSelect').append(opciones);
        }
    });*/
    
    //carga selects para incidentes
    /* $.get("cargarIncidentesSelects.php",function(data,status){
        $('#incidenteSelect').html(data);
    });*/
    /*
    $.ajax({
        type: "get",
        url: "cargarIncidentesSelects.php",
        success: function(opciones){
            $('#incidenteSelect').append(opciones);
        }
    });*/
    
    function mostrarIncidentes() {
        $.ajax({
            type: "get",
            url: "obtener.php",
            success: function(data){
                $('#tabla').html(data);
            }
            
        });
        $.ajax({
            type: "get",
            url: "count.php",
            success: function(data){
                $('#count').append(data);
            }
        });
    }
    
    $("#registrar").click(function(){
        $.ajax({
            type: "post",
            url: "registrar.php",
            data: {
                idLugar: $('#lugarSelect').val(),
                idIncidente: $('#incidenteSelect').val()  
            },
            success: function(data){
                window.mostrarIncidentes();
            }
        });
    });
    
});
