<?php
  $ciphertext = mcrypt_encrypt(MCRYPT_DES, $key, $plaintext, $mode); // Noncompliant
  // ...
  $ciphertext = mcrypt_encrypt(MCRYPT_DES_COMPAT, $key, $plaintext, $mode); // Noncompliant
  // ...
  $ciphertext = mcrypt_encrypt(MCRYPT_TRIPLEDES, $key, $plaintext, $mode); // Noncompliant
  // ...
  $ciphertext = mcrypt_encrypt(MCRYPT_3DES, $key, $plaintext, $mode); // Noncompliant

  $cipher = "des-ede3-cfb";  // Noncompliant
  $ciphertext_raw = openssl_encrypt($plaintext, $cipher, $key, $options=OPENSSL_RAW_DATA, $iv);
?>