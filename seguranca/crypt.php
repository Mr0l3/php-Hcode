<?php

$method = "aes-256-gcm";
$key = openssl_random_pseudo_bytes(32);  //256 bits key
$iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length($method));

$message = "Crypto testing AES-256-GCM algo";

$cryptMess = base64_encode(openssl_encrypt($message, $method, $key, 0, $iv, $tag));

$decryptMess = openssl_decrypt(base64_decode($cryptMess), $method, $key, 0, $iv, $tag);

echo "Encrypted message: $cryptMess<br/>";
echo "Decrypted message: $decryptMess";
