


<?php
    //funciones sin parámetros
    function saludo (){
        echo "hola, soy alumno de ITI <br><br>";
    }
    saludo();

    //funcion con parámetro
    function despedida ($adios){
        echo $adios."<br>";
    }
    despedida ("Adios, me voy!<br>");




    //Función  con retorno
    function retorno ($retornar){
        return $retornar;
    }
    echo retorno ("retornar TEXTO");










?>