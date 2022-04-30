<?php
    // funcion que recibe como parametro la variable i
    function doble($i) {
        return $i*2;
    }
    // variable a de tipo boolean con valor true
    $a = TRUE;   
    // variable b de tipo string con valor xyz
    $b = "xyz";
    // variable c de tipo string con valor xyz
    $c = 'xyz';
    // variable d de tipo integer con valor 12
    $d = 12;   
    // muestra el tipo de la variable a 
    echo gettype($a);
    // muestra el tipo de la variable b
    echo gettype($b);
    // muestra el tipo de la variable c
    echo gettype($c);
    // muestra el tipo de la variable d  
    echo gettype($d);
    // if que verifica si la variable d es integer, si lo es le suma 4 a traves del operador +=
    if (is_int($d)) {
        $d += 4;
    }
    // Estructura de control if que verifica si la variable a es string, si lo es muestra la variable a precedido de "Cadena: "
    if (is_string($a)) {
        echo "Cadena: $a";
    }
    // operador ternario "?" que si existe la variable a
    // le suma a la variable d una unidad con el operador ++
    // y si no existe a multiplica la variable d por 3 con el operador *
    // y el resultado se asigna a la variable d con el operador =
    $d = $a ? ++$d : $d*3;
    // se llama a la funcion "doble" pasandole como parametro
    // la variable d con el operador ++, que le suma una unidad
    // lo que retorna la funcion se le asigna a la variable f
    // con el operador =
    $f = doble($d++);
    // a la variable f se le suma 10 con el operador += 
    $g = $f += 10;
    // muestra las variables a, b, c , d, f, g
    echo $a, $b, $c, $d, $f , $g;
    // la salida es "booleanstringstringinteger1xyzxyz184444"
?>