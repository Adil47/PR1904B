<?php

function encrypt($message)
{
	$secret_key=sodium_hex2bin('f2d1c17b484619e2c8623102701922b3ecec0da15bb518bf3416ae5ff10d31ba');
	$nonce=sodium_hex2bin('605abb921dec83ea55aed6081933996a63093e3ee948345e');
	$encrypted_message = sodium_crypto_secretbox($message,$nonce, $secret_key);
	return sodium_bin2hex($encrypted_message);
}
encrypt('ali123');


?>