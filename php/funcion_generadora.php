<?php
// funcion generadora
// Generators
function show($limitg){
    for ($i=0; $i < $limitg; $i++) { 
        yield $i;
        echo "dentro<br>";
    }
}


foreach (show(10) as $value) {
    echo $value."<br>";
    echo "fuera<br>";
}


// php 8.1
// Fiber
// sincronizar

$limitf = 10;
$fiber = new Fiber(function($limit):void{
    $i=0;
    while ($i < $limit) {
        // un fiber solo se puede suspender internamente
        Fiber::suspend($i);     // en vez de yield como funcion generadora
        echo "dentro ".$i."<br>";
        $i++;
    }
});

// metodo static, solo se ejecuta una vez
$value = $fiber->start($limitf);
echo "fuera ".$value."<br>";

// se puede tener mas control
while (!$fiber->isTerminated()) {
    // solo se puede reanudar externamente
    $value = $fiber->resume();
    if ($value)
        echo "fuera ".$value."<br>";
}


