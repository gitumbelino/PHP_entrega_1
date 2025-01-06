<br><br>

<?php
// //comentário
// $ola = "hello world com '$'";
// echo '<br>';
// echo "hello world com echo";
// echo '<br>';
// echo $ola;
// echo '<br>';

// $numeroum = 7;
// $numerodois = 3;

// echo '<br>';

// echo "este é o resultado da soma:";
// $soma = $numeroum + $numerodois;
// echo '<br>';
// echo $soma;
// echo '<br>';
// echo '<br>';

// echo "este é o resultado da subtraccao:";
// $sub = $numeroum - $numerodois;
// echo '<br>';
// echo $sub;
// echo '<br>';
// echo '<br>';

// echo "este é o resultado da divisao:";
// $divisao = $numeroum / $numerodois;
// echo '<br>';
// echo $divisao;
// echo '<br>';
// echo '<br>';


// echo "este é o resultado da multiplicação:";
// $multi = $numeroum * $numerodois;
// echo '<br>';
// echo $multi;
// echo '<br>';

// $meuarray[] = 8;
// $meuarray[] = 4;


// echo "<pre>";
// print_r($meuarray);
// echo "</pre>";

// echo "Este é o resultado da soma: ". $meuarray[0]+$meuarray[1] ."<br>";
// echo "Este é o resultado da subtraccao: ". $meuarray[0]-$meuarray[1] ."<br>";
// echo "Este é o resultado da divisao: ". $meuarray[0]/$meuarray[1] ."<br>";
// echo "Este é o resultado da multiplicação: ". $meuarray[0]*$meuarray[1] ."<br>";

// echo '<br>';

// $meuarray[] = 8;
// $meuarray[] = 0;

// $meuarray=array (0 => 8, 1 => 0);

// $meuarray=array(8,0);
// $meuarray=array(8,0);

// $meuarray["cao"]=8;

// echo '<br>';
// echo "sandwich";


// echo '<br>';

// if ($meuarray[1]!=0){
	// echo "Este é o resultado da divisao: ". $meuarray[0]+$meuarray[1] ."<br>";
// }else {
	// echo "<b>Não é possível fazer a divisão por zero<b>.<br>";
// }
// echo '<br>';
// echo '<br>';
//mostrar de 12 é divisivel por 2,3,4 e 5

$numero = 12;
$dividendos = array (2,3,4,5);

// foreach ($dividendos as $dividendo){
	// if($numero%$dividendo == 0){
		// echo "O" .$numero. "é divisivel por".$dividendo."<br>";		
	// }else{
		// echo "O" .$numero. "não é divisivel por ".$dividendo."<br>"; 
	// }
// }
// exit();



// i++ incrementar () i+1 i=i+1

/* for ($i = 0; $i < count($dividendos); $i++) {
	if($numero%$dividendos){
		echo "O" .$numero. "é divisivel por".$dividendos[$i]."<br>";		
}else{
	echo "O" .$numero. "não é divisivel por".$dividendos[$i]."<br>";	
}
}
 */

/* $i = 0;
while ($i < count ($dividendos)){
	if($numero % $dividendos[$i] == 0){
		echo "O" .$numero. "é divisivel por" .$dividendos[$i] . "<br>";
	} else {
		echo "O" .$numero. "não é divisivel por" .$dividendos[$i]. "<br>";
	}
	$i++;
} */


/* 
function verificardivisiveis($dividendos, $numero) { 

$i = 0; 
while ($i < count($dividendos)) { 
	if ($numero % $dividendos[$i] == 0) 
		{ echo "O " . $numero . " é divisível por " . $dividendos[$i] . "<br>"; 
	} else { 
		echo "O " . $numero . " não é divisível por " . $dividendos[$i] . "<br>"; } 
	
	$i++; } 
		
	} 
		
		 */
		 
		 
	

	function verificardivisiveis($dividendos, $numero) {
		$i = 0;
		while ($i < count($dividendos)) {
			if ($numero % $dividendos[$i] == 0) {
				echo "O " . $numero . " é divisível por " . $dividendos[$i] . "<br>";
			} else {
				echo "O " . $numero . " não é divisível por " . $dividendos[$i] . "<br>";
			}
			$i++;
		}
	}

	// Example usage
	$dividendos = [2, 3, 4, 5];
	$numero = 10;

	verificardivisiveis($dividendos, $numero);

?>


