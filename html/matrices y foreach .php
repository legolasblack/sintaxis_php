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
$matriz[0][0]="1";
$matriz[0][1]="2";
$matriz[1][0]="3";
$matriz[1][1]="4";

for($i=0;$i<2;$i++){
	for($j=0;$j<2;$j++){
		echo $matriz[$i][$j]."<br>";
	}
}
echo "<br><br>";
//-----------------------
/*este codigo es un arreglo vidimencional o matriz con indices asociativos*/
$alimentos=array("fruta"=>array("tropical"=>"kiwi",
                                "citrico"=>"mandarina",
                                "otros"=>"manzana"),
                 "leche"=>array("animal"=>"vaca",
                 	            "vagetal"=>"coco"),
                 "carne"=>array("vacuno"=>"lomo",
                                "porcino"=>"pata"));
//comenzamos el recorrido de arreglo con foreach
foreach($alimentos as $clave_alim=>$alim){
	echo "$clave_alim:<br>";
//este while nos permite desdoblas la segunda dimension del arreglo 
	while (list($clave,$valor)=each($alim)){
		echo "$clave=$valor<br>";
	}
	echo "<br>";
}
echo "<br><br>";

//la funcion var_dump nos permite sustituir el foreach e imprimir los valores de manera mas bruta, solo mandamos el arreglo asociativo como parametro 
echo var_dump($alimentos);
?>
</body>
</html>