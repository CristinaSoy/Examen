<?php declare (strict_types=1) 
//Registra 4 ríos y luego...necesitaremos dos procesos.
//Proceso que devuelva río menos caudaloso.
// Dada una província, devolver los ríos que pasan

$rios = [];


//crear rio
$rio1 = new Rio ("Algas", "España", 1500, 25.5, ["Barcelona", "Gir", "Lleida"]);
$rio2 = new Rio ("asgas", "Francia", 500, 35.5,["Girona", "BCN]"]);
$rio3 = new Rio ("Ter", "Pallarrs", 250, 15.5, ["Girona"]);
$rio4 = new Rio ("Rin", "Francia", 50, 5, ["Lleida"]);

function encuentraCaudalMinimo(array $rios) : int {
    $claveCaudalMinimo = 0;
    $min = $rios[$claveCaudalMinimo];
    foreach ($rios as $rio) {
        $caudal= $rio[$i]->getCaudal();
        if ($caudal<$min) {
            $claveCaudalMinimo = $i;
        }
    }
    return $claveCaudalMinimo;
}        

function listaRios(string $provincia) : string {
    foreach ($rios as $rio) {
        array_filter($rio[5],  void {
            # code...
        });
        [$rio[5]];
    }

}





?>