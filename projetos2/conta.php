<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: red; color:yellow;">
    
    <form action="conta.php" method="post">
        <label for="nome">criar conta</label>
        <input type="text" name="conta" id="nome">
        <br>
        <label for="dep">depositar</lpositarel>
        <input type="number" name="dep" id="dep">
        <br>
        <label for="sac">sacar</label>
        <input type="number" name="sac" id="sac">
        <br>
        <button type="submit">Realizar</button>
    </form>

<?php
    Class Conta {
        public $saldo = 0;
        public $titular;

        function depositar($valor){
            $this->saldo +=$valor;
        }

        function sacar($valor){
            if(($this ->saldo >0) && ($this ->saldo >= $valor)){
                $this ->saldo -= $valor;
            } else {
                echo "<br>Saldo insuficiente";
            }
        }

        function verSaldo(){
            echo "Saldo atual: ". $this-> saldo . "<br>";
        }
    }

    $conta = $_POST['conta'];
    $dep = $_POST['dep'];
    $sac = $_POST['sac'];
    
    $conta = new Conta();
    $conta -> depositar($dep);
    $conta -> sacar($sac);
    echo "<br>";
    $conta -> verSaldo();
    /*
    $novaConta = new Conta();
    $novaConta -> verSaldo();
    $novaConta -> depositar(500);
    $novaConta -> verSaldo();
    $novaConta -> sacar(150);
    $novaConta -> verSaldo();
    */
?>
</body>
</html>
