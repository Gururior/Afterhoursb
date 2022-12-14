<?php
include 'global/config.php';
include 'global/conexion.php';
 ?>

<!DOCTYPE html>
<html>
    <head>
        <title>After Hours</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="css/themes/estilosJQM.min.css" />
        <link rel="stylesheet" href="css/themes/jquery.mobile.icons.min.css" />
        <link rel="stylesheet" href="js/jquery.mobile.structure-1.4.5.min.css" /> 
        <link rel="stylesheet" href="css/estilo.css">
        <link rel="stylesheet" href="css/dark-mode.css">
        <link rel="icon" href="imagenes/after_hours.jpg">

        
        <script src="js/jquery-1.11.1.min.js"></script> 
        <script src="js/jquery.mobile-1.4.5.min.js"></script> 
        <script src="js/crud.js"></script>

    </head>
    <body>
        <!-- Página principal -->
      
        <div data-role="page" id="principal" class="imagen" style="background-image:url('imagenes/intergradora\ logo\ beta.jpg')">
            <div data-role="content" data-position="fixed" data-theme="e">
                <center>
                    <a href="#login" data-inline="true" data-role="button" data-position="flex">Ordenar</a>
                </center>                

                
              
            </div>


        </div>

        <div class="custom-control custom-switch">

            <input type="checkbox" class="custom-control-input" id="darkSwitch" />
            <label class="custom-control-label" for="darkSwitch" ></label>

        </div>

        <!-- Página de login -->
        <div data-role="page" data-theme="d" data-dialog="true" id="login">
            <div data-role="header">

                <h6>Bienvenido a Emporios</h6>
                
                <a href="#" data-role="button" data-theme="a" data-icon="home" data-iconpos="notext" data-rel="back"></a>
                
        
            </div>

            <div data-role="content">
                <label for="mesaR" id="mesa1">Seleccione su numero de mesa:</label>
                <input type="number" id="usuario" placeholder="Ingrese numero de mesa">

                <a href="#Menu" for="idR" data-role="button" data-icon="check" data-inline="true" data-theme="a" onclick=";">Continuar</a>

                <a href="#principal" data-role="button" data-icon="delete" data-theme="b" data-inline="true">Cancelar</a>
                
                
            </div>

            <div data-role="footer" data-position="fixed">
                <h3>Intergadora-3-C-DSM-Equipo-3</h3>
                <div class="custom-control custom-switch ">
                    <center>
                    <label class="custom-control-label hoverMe" for="darkSwitch" type="checkbox">  Modo Oscuro </label>
                    </center>
                </div>
            </div>

        </div>

        <!-- Página para ordenar del menu -->
        <div data-role="page" id="Menu" data-theme="d" data-dialog="true" >
            <div data-role="header">
                <h1>&#x1f31f;Seleccion de orden&#x1f31f;</h1>
                <a href="#" data-role="button" data-theme="a" data-icon="arrow-l" data-iconpos="notext" data-rel="back"></a>
            </div>
            <div data-role="content">
                <div class="input-group mb-3">
                    <select class="form-select" id="noticia1">
    
                        <option value="">&#x1f37d;&#xfe0f;Seleccione su comida;&#x1f37d;&#xfe0f;</option>
                        <option value="">&#x1f355;Pizza chica Peperoni&#x1f355;</option>
                        <option value="">&#x1f355;Pizza chica Mexicana (&#x1f355;</option>
                        <option value="">&#x1f355;Pizza chica Carnes Frias&#x1f355;</option>
                        <option value="">&#x1f355;Pizza chica Vegetales&#x1f355;</option>
                        <option value="">&#x1f355;Pizza chica&#x1f355;</option>
                        <option value="">Pizza mediana</option>
                        <option value="">Pizza grande</option>
                        <option value="">&#x1f35f;Hamburguesa con papas&#x1f354;</option>
    
                    </select>
                </div>
                
                <div class="input-group mb-3">
                    <select class="form-select" id="noticia1">
    
                        <option value="">&#x1f377;Seleccione su bebida&#x1f377;</option>
                        <option value="">Coca cola (600ml)</option>
                        <option value="">Sprite (600ml)</option>
                        <option value="">Fanta (600ml)</option>
                        <option value="">7up (600ml)</option>
    
                    </select>
                </div>
                <div class="input-group mb-3">
                    <select class="form-select" id="noticia1">
    
                        <option value="">&#x1f36e;Seleccione su postre&#x1f36e;</option>
                        <option value="">Pastel de chocolate</option>
                        <option value="">Flan napolitano</option>
                        <option value="">Fanta (600ml)</option>
                        <option value="">7up (600ml)</option>
    
                    </select>
                </div>
                
                
                    
                    
                    <h3></h3>
                    <a href="#mostrarMenu" data-role="button" data-icon="grid" data-inline="true" data-theme="a" onclick="insertarOrden();">Enviar solicitud</a>

                    <a href="#inicio" data-role="button" data-icon="delete" data-inline="true" data-theme="b" onclick="">Cancelar</a>
                </form>
            </div>

            <div data-role="footer" data-position="fixed">
                <h3>Intergadora-3-C-DSM-Equipo-3</h3>

                <div class="custom-control custom-switch ">
                    <center>
                    <label class="custom-control-label hoverMe" for="darkSwitch" type="checkbox">  Modo Oscuro</label>
                    </center>
                </div>
            </div>

        </div>

        <!-- Página para mostrar orden-->
        <div data-role="page" id="mostrarMenu" data-theme="d" data-dialog="true">
            <div data-role="header">
                <h1>MESA</h1>
            </div>
            <div data-role="content">
                <h2>Lista de Platillos solicitados</h2>
                <ul id="listaUsuarios" data-role="listview" data-inset="true">                    
                </ul>

                <a href="#Pago" data-role="button" data-icon="check" data-inline="true" data-theme="a" onclick="mostrarusuario();">Pagar</a>

            </div>

            <div data-role="footer" data-position="fixed">
                <h3>Intergadora-3-C-DSM-Equipo-3</h3>
                <div class="custom-control custom-switch ">
                    <center>
                    <label class="custom-control-label hoverMe" for="darkSwitch" type="checkbox">  Modo Oscuro</label>
                    </center>
                </div>
            </div>

        </div>

        <!-- Página para actualizar / eliminar ordenes para el chef -->
        <div data-role="page" id="actualizaElimina" data-theme="a" data-dialog="true">
            <div data-role="header">
                <h1>Acciones del registro</h1>
            </div>
            <div data-role="content">
                <h1>Actualiza o elimina el registro</h1>
                <form id="accionesForm">
                    <label for="usuarioA">Usuario:</label>
                    <input type="text" id="usuarioA" placeholder="Ingresa tu usuario...">

                    <label for="contrasenaA">Contraseña:</label>
                    <input type="text" placeholder="Escribe tu contraseña..." id="contrasenaA">

                    <a href="#" data-role="button" data-icon="edit" data-inline="true" onclick="actualizarUsuario();">Actualizar</a>

                    <a href="#" data-role="button" data-icon="delete" data-inline="true" onclick="eliminarUsuario();">Eliminar</a>

                    <a href="#login" data-role="button" data-icon="back" data-inline="true" >Cancelar</a>
                </form>
            </div>

            <div data-role="footer" data-position="fixed">
                <h3>Intergadora-3-C-DSM-Equipo-3</h3>
                <div class="custom-control custom-switch ">
                        <center>
                        <label class="custom-control-label hoverMe" for="darkSwitch" type="checkbox">  Modo Oscuro</label>
                        </center>
                    </div>
            </div>

        </div>

        <!-- Página para pagar las deudas-->
        <div data-role="page" id="Pago" data-theme="d" data-dialog="true">
            <div data-role="header">
                <h1>Forma en que pagara!...</h1>
            </div>
            <div data-role="content">
                <label>Nombre:</label>
                <input type="text" placeholder="Nombre del propietario">

                <h2>Debito o Credito</h2>
                <label>Numero de tarjeta:</label>
                <input type="number" placeholder="######  ######  ####">

                <label>Clave NIP:</label>
                <input type="number" placeholder="####">

                <label>Fecha de Vencimiento:</label>
                <input type="text" placeholder="00/00">

                <a href="#mostrarMenu" data-role="button" data-icon="check" data-inline="true" data-theme="a" onclick="mostrarusuario();">Pagar</a>

                    <a href="#Menu" data-role="button" data-icon="delete" data-inline="true" data-theme="b" onclick="">Cancelar</a>

                    <a href="#Metodo" data-role="button" data-icon="grid" data-inline="true" data-theme="d">PAYPAL</a>
            </div>

            <div data-role="footer" data-position="fixed">
                <h3>Intergadora-3-C-DSM-Equipo-3</h3>
                    <div class="custom-control custom-switch ">
                        <center>
                        <label class="custom-control-label hoverMe" for="darkSwitch" type="checkbox">  Modo Oscuro</label>
                        </center>
                    </div>
            </div>

        </div>
        <!-- Otro metodo Pay-pal-->
        <div data-role="page" id="Metodo" data-theme="a" data-dialog="true">
            <div data-role="header">
                <h1>Metodo PAYPAL</h1>
                <div data-role="content">
                    <label>Nombre:</label>
                    <input type="text" placeholder="Nombre del propietario">
    
                    <h2>Cuenta de Paypal</h2>
                    <label>Numero de la cuenta:</label>
                    <input type="number" placeholder="######  ######  ####">

                    <label>Fecha de Vencimiento:</label>
                    <input type="text" placeholder="00/00">
    
                    <a href="#mostrarMenu" data-role="button" data-icon="check" data-inline="true" data-theme="a" onclick="mostrarusuario();">Pagar</a>
    
                    <a href="#Menu" data-role="button" data-icon="delete" data-inline="true" data-theme="b" onclick="">Cancelar</a>

                </div>

                
                </div>

                <div data-role="footer" data-position="fixed">
                    <h3>Intergadora-3-C-DSM-Equipo-3</h3>
                        <div class="custom-control custom-switch ">
                            <center>
                            <label class="custom-control-label hoverMe" for="darkSwitch" type="checkbox">  Modo Oscuro </label>
                            </center>
                        </div>
                

                

            </div>
           
        </div>

        <script src="./js/dark-mode-switch.min.js"></script>
    </body>
</html>