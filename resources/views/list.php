<?php declare(strict_types=1);

$cerFile = $ROOT_DIR . '\\src\\fiel\\' . $_ENV['CER_FILE'];
$pemKeyFile = $ROOT_DIR . '\\src\\fiel\\' . $_ENV['PEM_KEY_FILE'];

$passPhrase = 'Ramy1296'; // contraseñas para abrir la llave privada

echo $cerFile;

// $handle = fopen("inputfile.txt", "r");

$fiel = PhpCfdi\Credentials\Credential::openFiles($cerFile, $pemKeyFile, $passPhrase);

// objeto certificado
$certificado = $fiel->certificate();
echo $certificado->rfc(), PHP_EOL; // el RFC del certificado