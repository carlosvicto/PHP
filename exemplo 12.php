<html>
<head>
<title>exemplo 12</title>
</head>
<body>
<?php
function msn(){
$msn="Olá Bem Vindo as Funções de PHP";
 echo"<h2> $msn</h2>";
 }
 function imprimir($texto){
 echo"<h3>$texto</h3>";
 }
 msn();
 imprimir("testando função");