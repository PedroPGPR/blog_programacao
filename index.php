<?php

    //Importacoes
    require_once("required.php");

    //Rotas
    $rotas = $_SERVER["REQUEST_URI"];
    $rotas = explode("/", $rotas);
    
    if(str_contains($rotas[count($rotas)-1], "?")){
        $parametros = str_replace("?", "/", $rotas[count($rotas)-1]);
        $parametros = explode("/", $rotas[count($rotas)-1]);
        echo print_r($parametros) . "<br>";
        $_GET = [];
        foreach($parametros as $p){
            $p = explode("=", $p);
            echo print_r($p) . "<br>";
        }
        var_dump($_GET) . "<br>";
        $rotas[count($rotas) - 1] = explode("?", $rotas[count($rotas) - 1])[0];
        echo print_r($rotas[count($rotas) - 1]) . "<br>";
    }

    switch($rotas[2]){
        
        case "":
            require_once("models/home_model.php");
            break;
        case "home":
            require_once("models/home_model.php");
            break;
        case "sobre":
            require_once("models/sobre_model.php");
            break;
        case "contactos":
            require_once("models/contactos_model.php");
            break;
        case "postagem":
            require_once("models/postagem_model.php");
            break;
        default:
            require_once("models/404_model.php");
            break;
    }

?>
        