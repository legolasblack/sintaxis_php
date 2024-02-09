<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>
		sintaxis de clases en php
	</title>
</head>
<body>


<?php
$var1=0;
echo "la variable a incremetar es: ".$var1."<br>";
//for($i=0;$i<=100;$i++){ esta linea funciona hasta el 101 por el uso de simbolos <= tambien es valido
for($i=0;$i<100;$i++){
	$var1=$var1+1;
	echo $var1."<br>";
}
echo "la variable que incremento es: ".$var1."<br>";

//while ($var1 >=0 ) {
while ($var1 >0 ) {
    echo $var1--."<br>";  /* el valor presentado sería
                   $var1 antes del decremento             */
}
echo "la variable que decremento es: ".$var1."<br>";
/* ejemplo 2 */

$i = 1;
while ($i <= 10):
    echo $i;
    $i++;
endwhile;

?>

<?php

//ejemplo simple de una sintaxis do while 
//la estructura do while nos permite recorrer por lo menos
//una sola vez el codigo adentro del ciclo, 
//ya que se verifica 
$i = 0;
do {
    echo $i;
} while ($i > 0);
?>
</body>
</html>