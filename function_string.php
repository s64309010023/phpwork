<?php

    $name = "Hasanee Kalatae";
    echo strlen($name);
    echo "<br>";
    $word = "I Love You";
    echo str_word_count($word);
    echo "<br>";
    echo strrev($name);
    echo "<br>";
    echo strpos($word,"Love");
    echo "<br>";
    echo str_replace("Love","hate",$word);
    echo "<br>";
    echo strtoupper($word);
    echo "<br>";
    echo strtolower($name);
    echo "<br>";
    echo substr($word,-3);
    echo "<br>";
    echo substr($word,2,4);


?>