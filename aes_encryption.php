<?php

$p = "password";

function aes_encrypt($u) {
	global $p;
	$v = chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0);
	$u = base64_encode(openssl_encrypt($u, "aes-256-cbc", $p, OPENSSL_RAW_DATA, $v));
	return $u;
}

function aes_decrypt($u) {
	global $p;
	$v = chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0) . chr(0x0);
	$u = openssl_decrypt(base64_decode($u), "aes-256-cbc", $p, OPENSSL_RAW_DATA, $v);
	return $u;
}

?>