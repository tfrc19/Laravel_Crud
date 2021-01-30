$(document).ready(function(e){

    $('#NombreArticulo').change(function(e){
        var mayuscula = $('#NombreArticulo').val().toUpperCase();
        $('#NombreArticulo').val(mayuscula);
        
    });
     $('#SeccionArticulo').change(function(e){
        var mayuscula = $('#SeccionArticulo').val().toUpperCase();
        $('#SeccionArticulo').val(mayuscula);
        
    });
     $('#PaisOrigen').change(function(e){
        var mayuscula = $('#PaisOrigen').val().toUpperCase();
        $('#PaisOrigen').val(mayuscula);
        
    });
    /*$('#enviar').on('click',function(e){
        alert("");
        e.preventDefault();
        $('#NombreArticulo').text("Hola");
    });*/
});