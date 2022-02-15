<?php
    $email = $_GET["e"];
    $name = $_GET["n"];
    $age = $_GET ["a"];
    if(strlen($name) > 3){
        if((strpos($email,"@") && strpos($email,".")) && strpos()!== false ){
            if(is_numeric($age)){
                echo "Accettato";
            }
        }
    }else echo "rifiutato";
?>