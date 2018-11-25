<?php

$anoNascimento = 1990; //Sugestões para nomes de variáveis

$nomeCompleto = "André Luiz Deboni"; //Sugestões para nomes de variáveis

$nome1 = "João"; // Você não pode criar $1nome = "João". Não pode iniciar com número. Precisa estar no final ou no meio do nome. Não pode usar caracteres especiais como $%nome = "João". O único que pode é o _ [Underline].

$sobrenome = "Rangel";

//CONCATENAÇÃO:


$nomeCompleto = $nome1 . " " . $sobrenome; //Concatenar variáveis. O ponto (.) serve para concatenar. Pode usar as aspas duplas com espaço entre elas para as palavras não ficarem juntas. 

echo $nomeCompleto;

exit; //parar o código aqui.

echo $nome1;

echo "<br/>"; //Quebrar uma linha. Já aprendi no antigo HTML.

unset($nome1); //Para limpar uma variável. Se quiser limpar tudo de uma única vez podemos usar assim: unset($nome1, $nome2, etc);

if (isset($nome1)) { //se a variável $nome1 existir (estiver definida) mostre a variável. Dessa forma não aparece o Notice (uma notificação de erro). *Eliminar uma variável da memória. * isset = a variável existe ?


	echo $nome1;
}


//echo $anoNascimento; //Escrever/mostrar o conteúdo da variável na tela.

//echo $nomeCompleto; //Escrever/mostrar o conteúdo da variável na tela.



//Como fazer comentário em bloco. Você usa /* para abrir e no final */

/*
$anoNascimento = 1990; //Sugestões para nomes de variáveis

$nomeCompleto = "André Luiz Deboni"; //Sugestões para nomes de variáveis

*/

//Não pode usar uma variável reservada. Ex: $this. Ela fica com a cor laranja. São pré definidas. Arrays super globais.

//Tipos de dados no PHP.


?>