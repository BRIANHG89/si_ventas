<?php

    $fecha1 = new DateTime('20-5-2018');
    $fecha1 = $fecha1->format("Y"); //=> 2001
    //print_r($fecha1);
    $fecha2 = new DateTime('20-12-2018');
    $fecha2 = $fecha2->format("Y"); //=> 2016

    $fechaInicio = new DateTime('3-2-2018');
    $fechaInicio = $fechaInicio->format("Y"); //=> 2015
    $fechaFin = new DateTime('01-07-2018');
    $fechaFin = $fechaFin->format("Y");  //=> 2017
    
    // Creamos una función para comprobar las fechas si están en el rango
    function comprobarFecha($fecha, $fechaInicio, $fechaFin) {
        
        return $fecha >= $fechaInicio && $fecha <= $fechaFin;
    }
    

    if (comprobarFecha($fecha1, $fechaInicio, $fechaFin)) {
        
        echo 'Esta dentro del periodo';
        
    } else {
        
        echo 'Esta fuera del periodo'; // <= Resultado
    }    
  
    echo '<br>';
    //echo PHP_EOL;
    

    if (comprobarFecha($fecha2, $fechaInicio, $fechaFin)) {
        
        echo 'Esta dentro del periodo'; // <= Resultado
        
    } else {
        
        echo 'Esta fuera del periodo';
    }

