<?php
session_start();
$id=$_SESSION['ide'];
include 'BancoData.php';
$temp = new Banco();
$temp ->deletar(); 


?>

