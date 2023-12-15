
<?php


    // Esto es para el for. 
    for ($a = 0; $a < 10; $a++) {
        echo $a;
    }
    
    echo "<br>";
    

    //Esto para el IF
    $edad = $_GET['edad'];
    
    if ($edad <= 3) {
        echo "Eres infantil";
    } elseif ($edad >= 4 && $edad <= 17) {
        echo "Eres un niño";
    } elseif ($edad >= 18 && $edad <= 64) {
        echo "Eres un adulto";
    } else {
        echo "Eres un viejo";
    }
    echo "<br>";
    

        $asignatura = array('fol', 'Aplicaciones WEB', 'Sistemas Operativos');
        echo $asignatura[0]." \n";
        echo "<br>";
        echo "Hola".count($asignatura);

        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";

        $silla = array ('a' => "1", "b" => "2", "c" => "3");
        echo var_dump($silla);

    

        echo "<br>";
        echo "<br>"; 
        echo "<br>";

        foreach ($silla as $idioma => $nom)     
        {
            echo "$idioma : \t $nom\n";
          }


?>