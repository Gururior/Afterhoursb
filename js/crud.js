function insertarOrden(){
    
    let mesa1 = document.getElementById("mesaR").value;

        
        $.ajax({
            type: "post",
            url: "http://localhost/insertarOrden.php",
            data: {NoMesa: mesa1},
            dataType: "jsonp",
            jsonp: "jsoncallback",
            crossDomain: true,
            success: function(datos){
                if(datos.mensaje == "insertado"){
                    alert("Registro exitoso!!...");
                    document.getElementById("registroForm").reset();
                    $.mobile.changePage("#login",{transition:"flip"});
                }
                else
                    alert("Problemas al realizar el registro!!.....");
            }        
        });
    
}

function myFunction() {
    var element = document.body;
    element.classList.toggle("dark-mode");
  }