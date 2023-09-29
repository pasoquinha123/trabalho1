<?php

class aviao{
  
    public $modelo;
    public $cmpaerea;
    public $cdp;
    public $velomax;
    public $autonomia;


    public function __construct(string $modelo, string $cmpaerea, string $cdp, string $velomax, string $autonomia,){
        $this->definirModelo($modelo);
        $this->definirCmpaerea($cmpaerea);
        $this->definirCdp($cdp);
        $this->definirVelomax($velomax);
        $this->definirAutonomia($autonomia);
    }
    
    public function definirModelo(string $modelo){
        $this->modelo = $modelo;
    }

    public function definirCmpaerea(string $cmpaerea){
        $this->cmpaerea = $cmpaerea;
    }

    public function definirCdp(string $cdp){
        $this->cdp = $cdp;
    }

    public function definirVelomax(string $velomax){
        $this->velomax = $velomax;
    }

    public function definirAutonomia(string $autonomia){
        $this->autonomia = $autonomia;
    }

    public function exibirModelo(){
        return $this->modelo;
    }

    public function exibirCmpaerea(){
        return $this->cmpaerea;
    }

    public function exibircdp(){
        return $this->cdp;
    }

    public function exibirVelomax(){
        return $this->velomax;
    }

    public function exibirAutonomia(){
        return $this->autonomia;
    }
}
?>