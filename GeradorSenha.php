<?php
function senha($quantidade_digitos){

$numero = mt_rand(33,122);
	for ($i=0; $i < $quantidade_digitos; $i++) {
		$numero = mt_rand(33,122);
    	echo chr($numero);
	}
}

senha(8);
?>