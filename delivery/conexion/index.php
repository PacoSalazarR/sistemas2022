<?php

$usuario = "sistemasgeo5452_fsalazaradm";
$contrasena = "%N6Pt^C,BbiY,Z8&Qc";

try{
    $conn = new PDO('mysql:host=localhost;dbname=sistemasgeo5452_delivery'
    , $usuario, $contrasena);
    $conn->setAttibute(PDO::ATTR_RESPONSE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
    echo "ERROR " . $e->getMessage();
}

?>