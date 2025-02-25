<?php

class IMC {
    public $condicional = array();
    public $IMC;

    public function __construct($condicional, $IMC){
        $this->condicional = $condicional;
        $this->IMC = $IMC;
    }

    public function resposta() {
        foreach($this->condicional as $item) {
            // Avalia a condição para o IMC
            eval('$condicao = ' . str_replace('IMC', $this->IMC, $item['condicao']) . ';');
            
            if ($condicao) {
                return $item['responder'];
            }
        }
    }
}

$condicoes = [
    ['condicao' => 'IMC < 18.5', 'responder' => 'Abaixo do peso'],
    ['condicao' => '18.5 <= IMC && IMC < 24.9', 'responder' => 'Peso normal'],
    ['condicao' => '25 <= IMC && IMC < 29.9', 'responder' => 'Sobrepeso'],
    ['condicao' => '30 <= IMC && IMC < 39.9', 'responder' => 'Obesidade'],
    ['condicao' => 'IMC >= 40', 'responder' => 'Obesidade grave'],
];

$imc = 0;
$nome = '';
$altura = 0;
$peso = 0;
$retorno = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $altura = $_POST['altura'];
    $peso = $_POST['peso'];


    $imc = $peso / ($altura * $altura);

    $classe = new IMC($condicoes, $imc);

 
    $retorno = $classe->resposta();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora IMC</title>
</head>
<body>

<form action="" method="POST">
    <section>
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" >
        </div>
        <div class="form-group">
            <label for="altura">Altura (Ex: 1.80):</label>
            <input type="text" class="form-control" id="altura" name="altura" >
        </div>
        <div class="form-group">
            <label for="peso">Peso (Ex: 88.6Kg):</label>
            <input type="text" class="form-control" id="peso" name="peso" >
        </div>
    </section>
    <div><button type="submit">Calcular</button></div>
</form>
    
<?php 
    if ($imc > 0) {
        echo  '<div>' . $nome . ", seu IMC é: " . number_format($imc, 2) . " - " . $retorno . '</div>';
    }
?>

</body>
</html>
