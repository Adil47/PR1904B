<?php
$secret_key = random_bytes(SODIUM_CRYPTO_SECRETBOX_KEYBYTES);
$nonce = random_bytes(SODIUM_CRYPTO_SECRETBOX_NONCEBYTES);

echo "Key : ".sodium_bin2hex($secret_key)."<hr>";
echo "nonce : ".sodium_bin2hex($nonce)."<hr>";



?>

