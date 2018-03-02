
function mostrar(id) {
    if (id == "cliente") {
        $("#cliente").show();
        $("#edecan").hide();
      
    }

    if (id == "edecan") {
        $("#cliente").hide();
        $("#edecan").show();
        
    }


}
