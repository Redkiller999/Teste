<?php 

$address = (object) array (
    'cep' => '',
    'logradouro' => '',
    'bairro' => '',
    'localidade' => '',
    'uf' => ''
);
     





if ( isset ($_POST['cep'])){

    $cep = $_POST['cep'];
    $url = "http://viacep.com.br/ws/{$cep}/json/";

    $address = json_decode(file_get_contents($url));
}

