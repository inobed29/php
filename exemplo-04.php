<?php

//Variáveis pré-definidas ou arrays super globais. São variáveias internas do PHP que já vem com alguns recursos.

$nome = (int)$_GET["a"]; //http://localhost/variaveis/exemplo-04.php?a=123. Toda essa informação foi digitada no navegador. O conteúdo da variável é uma string, se for usar número precisa colocar: $nome = (int)$_GET["a"];

// mais de uma variável usar assim: http://localhost/variaveis/exemplo-04.php?a=123&b=456

//var_dump($nome); //ele mostra o tipo da variável e seu valor. Poderia usar apenas o echo para exibir apenas o valor.

//Como pegar o IP do usuário.

//$ip = $_SERVER["REMOTE_ADDR"];
$ip = $_SERVER["SCRIPT_NAME"];

echo $ip;

?>