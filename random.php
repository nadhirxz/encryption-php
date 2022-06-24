<?php 
$u = "";
for ($i=0; $i < 64; $i++) { 
	$up = chr(mt_rand(65,90));
	$low = chr(mt_rand(97,122));
	$u = $u.$up.$low;
}
echo $u;
?>