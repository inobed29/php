<?php

//ESCOPO DE VARIÁVEL. Até onde essa variável será enxergada. O escopo local indica que a variável existe apenas naquele arquivo que você criou.
//A variável de seção é exergada em várias páginas.

$nome = "Glaucio"; //escopos diferentes. Ex: laje.

function teste() { //escopo casa1

	global $nome; //quero usar dentro dessa função a variável $nome criada fora desse escopo. foi criada na laje digamos assim. Nome aqui e nome fora é a mesma variável quando usamos o global $nome;.
	echo $nome;

}



function teste2() { //escopo casa2

	$nome = "João";
	echo $nome. " " ."Agora no teste2";
}

teste(); //invocar/chamar a função teste.

echo "</br>";
echo "</br>";

teste2(); //invocar/chamar a função teste2.

?>