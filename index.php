<?php

#Creazione di una variabile
$text = 'Ciao Ragazzi come sta andando il corso Boolean Careers?';

#Stampiamo il contenuto della variabile su schermo
echo $text;

echo '<br>';

#stampiamo la lunghezza dell stringa
echo strlen($text);

echo '<br>';

$textModified = str_replace($_GET["word"], '***', $text);

#cambiamo una parola decisa dall'utente dall query String in 3 asterischi
echo $textModified;

echo '<br>';

echo strlen($textModified);

?>
