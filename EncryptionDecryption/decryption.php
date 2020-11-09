<?php

function decryption($encMsg)
{
	
	$secret_key=sodium_hex2bin('f2d1c17b484619e2c8623102701922b3ecec0da15bb518bf3416ae5ff10d31ba');
	$nonce=sodium_hex2bin('605abb921dec83ea55aed6081933996a63093e3ee948345e');
	$encrypted_message=sodium_hex2bin($encMsg);
	$decrypted_message =sodium_crypto_secretbox_open($encrypted_message, $nonce, $secret_key);

	return $decrypted_message;
}
 decryption('f5207d6eebd5c1caff3d17a4e2a5e30604d5de473603a597b8e78de296435ed7cc3377e4baa7fd5b');


?>
