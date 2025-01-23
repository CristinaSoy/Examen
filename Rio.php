<?php declare(strict_types=1)

class Rio {
    private string $nombre;
    private string $pais;
    private int $long:
    private float $caudal;
    private array $provincia;


    public function __construct(string $nombre,  string $pais, int $long,float $caudal,string $provincia) {
        $this->nombre = $nombre;
        $this->pais = $pais;
        $this->long = $long;
        $this->caudal = $caudal;
        $this->provincia =$provincia;
    }
}

public function getCaudal() : string {
    return $this->caudal;
}



?>