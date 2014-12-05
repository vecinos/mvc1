<?php
function view($plantilla,$variable=array()){
    extract($variable);
    require('views/'.$plantilla.'.tpl.php');
}
function controller ($nombre){
    if(empty($nombre)){
        $nombre='home';
    }
    $archivo="controllers/$nombre.php";
    if(file_exists($archivo))
        require($archivo);
        else
            echo "Archivo no encontrado";
}
?>