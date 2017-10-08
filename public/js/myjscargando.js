$(document).ready(function() { 

 	$('#btnsesion').click(function() {  

         if( ($("#email").val() != '') && ($("#pass").val() != '') ) {

            var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;

            if ( regex.test($('#email').val().trim()) ) {

                $("#btnsesion").css("display","none");
                $("#cargando").show();

            }
        }

 	});



    $('#btnR').click(function() {  

        var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;

        if ( regex.test($('#emailR').val().trim()) ) {

            $("#btnR").css("display","none");
            $("#cargandoR").show();

        }
       
    });



    $('#btnCrear').click(function() {  

        if ( ($("#txttitulo").val() != '') && ($("#txtlink").val() != '') && ($("#cbocategorias").val() != '') ) {

            $("#btnCrear").css("display","none");
            $("#cargandoR").show();

        }
       
    });


        $('#btnAdjudicar').click(function() {  

        if ( $("#cboproveedor").val() != '' ) {

            $("#btnAdjudicar").css("display","none");
            $("#cargandoAd").show();

        }
       
    });


 });