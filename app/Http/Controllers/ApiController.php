<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller{
    public function apiBlade(){
        return view("api");
    }
    public function runApi(Request $request){
        $uf = $request->localidade;
        $local = $request->projecao;

        $localidades = file_get_contents("https://servicodados.ibge.gov.br/api/v1/localidades/estados/".$uf."/distritos");
        $projecoes = file_get_contents("https://servicodados.ibge.gov.br/api/v1/projecoes/populacao/".$local);
        echo "<h1>Api Localidades</h1>";
        echo '<form action="http://127.0.0.1:8000/api"><button type="submit">Voltar</button></form>';
        echo $localidades;
        echo "</br>";
        echo "<h1>Api Projeções</h1>";
        echo $projecoes;
        echo "</br>";
        echo "</br>";
        echo '<form action="http://127.0.0.1:8000/api"><button type="submit">Voltar</button></form>';
        
        
    }
}

?>
