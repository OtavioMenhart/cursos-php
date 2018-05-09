<?php
//php ini -> error reporting -> mudar e_all para ~ notice

/*
 * Possibilidades de isso retornar false:
 * $login não existir;
 * existir, porém conteúdo atribuído pode ser false, FALSE, NULL, null, '', "", 0, settype
 * todo o resto retornará true
 */

if($login){
	echo "logado<br>";
}
else{
	echo "nao cadastrado<br>";
}

echo "<hr>";

if(!$login){
	echo "nao cadastrado<br>";
}
else{
	echo "logado<br>";
}