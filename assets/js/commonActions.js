$(document).ready(function() {
    
    $(".navShowHide").on("click", function() {
        
        var main = $("#mainSectionContainer");
        var nav = $("#sideNavContainer");


        if( main.hasClass("leftPadding")) { // ¿El elemento main tiene la clase "leftPadding"?          
            nav.hide(); // Ocultar elemento nav 
        } else {
            nav.show(); // Msotrar elemento nav 
        }

        main.toggleClass("leftPadding"); // Adiciona o remueve la clase al elemento main 

    });






});