<?php

// Aqui são as variaveis
$nome = 'Hugo Vasconcelos';
$sobrenome = 'Freitas';
$idade = 26;
$numero = 5;
$mediaIdade = 30;

//echo $idade .'<br>';
echo $nome . ' ' . $sobrenome . ' e a sua idade é ' .$idade;

$total = $idade + $numero;
echo '<p>' .$total;

//TOMADAS DE DECISÃO IF
if($idade > $mediaIdade){
	echo '<p> Idade Maior que '. $mediaIdade;
}else if($idade == 27){
	echo '<p> Idade igua a 27 anos <p>';
}else{
	echo '<p> Idade não é maior que ' . $mediaIdade . ' e também não igual a 27 anos <p>';
}


//LAÇOS DE REPETIÇÃO
for($i=0; $i <= $numero; $i++){

	echo '<br> o valor de i é '.$i;
	
	if($i == 3){
		echo '<p>Contador é 3<p>';
	}
	
}


?>