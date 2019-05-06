

<?php
    //Código Imperativo o Spaguetti

    //Declaración y almacenamiento de variables
    $automovil1 = (object)["marca"=>"Toyota","modelo"=>"Corolla"];
    $automovil2 = (object)["marca"=>"Chevrolet","modelo"=>"Malibu"];
    $automovil3 = (object)["marca"=>"Nissan","modelo"=>"Tsuru"];
    
    //Funcion que obtiene las propiedades de las variables objeto
    function mostrar ($automovil){
        echo "<p> Hola soy un $automovil->marca, modelo $automovil->modelo</p>";
    }
    //invocar a las variables e imprimirlas
    mostrar($automovil1);
    mostrar($automovil2);
    mostrar($automovil3);
?>
