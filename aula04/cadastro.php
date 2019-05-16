<?php

if(empty($_POST['nome']) or empty($_POST['senha']) or empty($_POST['email']) or empty($_POST['observacao']));

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$observacao = $_POST['observacao'];

if (strlen($nome) >= 10) {
    echo $nome."<br>";
    echo strlen($nome)."<br>";
}else{
    echo "<script>alert('Existem campos em branco!');";
    echo "javascript:window.location='index.php';</script>";
}
echo $email. "<br>";
echo $senha. "<br>";
echo $observacao. "<br>";

?>