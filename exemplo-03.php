<?php 

//Exemplos com tipos de dados String. Perceba que você pode usar com aspas duplas ou simples. Veremos depois a diferenças delas.
//Abaixo alguns tipos básicos de tipos de variáveis.

$nome = "Hcode";
$site = 'www.hcode.com.br';

$ano = 1990; //Variável do tipo número.
$salario = 5500.99; //variável do tipo ponto flutuante. Tem casas decimais.
$bloqueado = false; //Variável do tipo booleano. Verdadeiro ou Falso.

//se colocar um número entre aspas o mesmo será um texto.

//////////////////////////////////////////////////////////////////////////////

//Tipos de variáveis Compostos. [Array e objeto]

$frutas = array("Abacaxi", "Laranja", "Manga");

echo $frutas[1]; //a contagem inicia do 0. Então: 0=Abacaxi, 1=Laranja e 2=Manga.

//Examplo de objeto:
echo "</br>";

$nascimento = new DateTime(); //Toda vez que ver a palavra new, um objeto está sendo usado. Assunto MUITO IMPORTANTE. Esse exemplo já é uma classe nativa. DateTime vai pegar a data de agora. É uma classe nativa.

//var_dump($nascimento); //por ser um objeto vamos usar o var_dump.

////////////////////////////////////////////////////////////////

//TIPOS ESPECIAIS [resource e null]

$arquivo = fopen("exemplo-03.php","r");

//var_dump($arquivo);

//Diferença entre nulo e vazio

$nulo = NULL; //nulo ausencia de valor. Não existe.
$vazio = ""; //vazio ele foi iniciado mas não tem informação. Foi reservado na memória um espaço.


?>