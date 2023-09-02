<?php
$name = "salman";
echo "the length of `$name` is " . strlen($name) . "<br/>"; ;
echo "the word count of `$name` is " . str_word_count($name) . "<br/>"; ;
echo "the reverse of `$name` is " . strrev($name) . "<br/>"; ;
echo "the position of `a` in $name " . strpos($name, "a") . "<br/>"; ;
echo "the replace of `salman` with `wahaaj` " . str_replace("salman", "wahaaj", $name) . "<br/>"; ;
echo "the repeat of `$name` is " . str_repeat($name, 4) . "<br/>";
?>