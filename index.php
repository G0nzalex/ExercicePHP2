<?php

echo ord('F'); //Affiche code ASCII
echo chr(101); //Affiche caractères depuis le code ASCII

$version = 8;
$langue = 'fr';
$url = 'PHP %d est disponible à l\'adresse https://%s.php.net';
printf($url, $version, $langue);