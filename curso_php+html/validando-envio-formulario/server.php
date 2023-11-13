<?php
echo "<pre>";
var_dump($_POST);
echo "</pre>";
var_dump(isset($_POST["nombre"]));
 if ( isset($_POST["nombre"]) && !empty($_POST["nombre"])) {
    echo "¡Hola " . $_POST['nombre'] . "!";
}
else {
    echo "No mandaste nada 😾"; 
} 

if ( isset($_POST["form"]) ) {
    echo "Todo el formulario fue mandado";
}
else {
    echo "No se mando ningun formulario";
}