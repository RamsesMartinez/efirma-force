<?php declare(strict_types=1);

$cerFile = '../fiel/' . $_ENV['CER_FILE'];
$pemKeyFile = '../fiel/' . $_ENV['PEM_KEY_FILE'];
$passPhrase = 'Ramy1296'; // contraseñas para abrir la llave privada
$file_path = $ROOT_DIR . "\\dicts\\" . $_ENV['PASSWORDS_FILE'];

$file_passwords = fopen($file_path, "r") or die("Unable to open file!");

// echo fread($file_passwords,filesize($file_path));
echo 'probando... <br>';

while ($word = fgets($file_passwords))  {
    try {
        $word = trim($word);

        $fiel = PhpCfdi\Credentials\Credential::openFiles($cerFile, $pemKeyFile, $word);
        
        // objeto certificado
        $certificado = $fiel->certificate();
        
        echo 'Contraseña encontrada: ' . $word;

    } catch (Exception $ex) {}
}
echo '<br> fin programa.';
fclose($file_passwords);
