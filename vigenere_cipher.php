<?php

function vigenere_cipher_encrypt($u) {
	global $p;
	for ($i=0; $i < strlen($u); $i++) {
		$t = ord($u[$i]);
		if ($t > 31 && $t < 127) {
			$t = ord($u[$i]) - 32 + ord($p[($i)%(strlen($p))]);
		if ($t>=95) {
			$t = $t%95 ;
		}
		$t += 32 ;
		$u[$i] = chr($t);
		}
	}
	return $u;
}

function vigenere_cipher_decrypt($u) {
	global $p;
	for ($i=0; $i < strlen($u); $i++) {
		$t = ord($u[$i]);
		if ($t > 31 && $t < 127) {
		$t -= 32 + ord($p[($i)%(strlen($p))]);
		if ($t<0) {
			$t += 95;
		}
		$t += 32 ;
		$u[$i] = chr($t);
		}
	}
	return $u;
}

?>
