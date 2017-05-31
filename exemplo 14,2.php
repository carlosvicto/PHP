<html>
<head>
<title>Exemplo 14.2</title>
</head>
<body>
<?php
function testeGlobal(){
global $a;
$a=25;
}
echo"<h1>variável Global</h1>";
$a=0;
testeGlobal();
echo"Valor dá Variável a = $a";
?>

</body>
</html>