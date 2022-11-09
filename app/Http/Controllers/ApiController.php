<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller{
    public function runApi(){
        $local = '3'; #regiao sudeste
        $uf = '33'; #rio de janeiro
        $localidades = file_get_contents("https://servicodados.ibge.gov.br/api/v1/localidades/estados/".$uf."/distritos");
        $projecoes = file_get_contents("https://servicodados.ibge.gov.br/api/v1/projecoes/populacao/".$local);
        echo $localidades;
        echo "</br>";
        echo $projecoes;
        
        
    }
}
