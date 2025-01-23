<?php declare (strict_types=1) 
//Registra 4 ríos y luego...necesitaremos dos procesos.
//Proceso que devuelva río menos caudaloso.
// Dada una província, devolver los ríos que pasan

$rios = [];


//crear rio
$rio1 = new Rio ("Algas", "España", 1500, 25.5, ["Barcelona", "Gir", "Lleida"]);
$rio2 = new Rio ("asgas", "Francia", 500, 35.5,["Girona", "BCN]");
$rio3 = new Rio ("Ter", "Pallarrs", 250, 15.5, ["Girona"]);
$rio4 = new Rio ("Rin", "Francia", 50, 5, ["Lleida"]);

function encuentraMinimo(array $rios) {
    $min;
    for ($i=0; $i<count($rios), $++i) {
        $caudal= $rio[$i]->getCaudal();
        $min =  
        if ($caudal<$min) {
            $
        }

    }
        
function listaRios()

    }
}



?>