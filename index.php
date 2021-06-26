
<?php

$reflection = "La vita di una persona consiste in un insieme di avvenimenti di cui l’ultimo potrebbe anche cambiare il senso di tutto l’insieme, ma non aver paura che possa finire. Abbi invece paura che possa non incominciare mai davvero.";

$wordCount = "la frase che segue è composta da " . str_word_count($reflection) . " parole.";
echo $wordCount . " - FRASE ORIGINALE - " . $reflection;

$badWord = $argv[1];
$sostitutiveWord = "***";
echo " - FRASE CENSURATA - " . str_replace($argv[1], $sostitutiveWord, $reflection);
?>

