<?php

class CryptoManager
{
    const AES = 'AES-192-CBC';
    const DES = 'DES-ECB';

    private $cipher;
    private $key;

    public function __construct($cipher, $key)
    {
        $this->cipher = $cipher;
        $this->key = $key;
    }

    public function encrypt($plainText)
    {
        return openssl_encrypt($plainText, $this->cipher, $this->key);
    }

    public function decrypt($cipherText)
    {
        return openssl_decrypt($cipherText, $this->cipher, $this->key);
    }


}