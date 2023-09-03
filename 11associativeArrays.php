<?php
    echo "associative arrays <br/>";
    $favColor = array(
        "salman" => "Red",
        "azam" => "Green",
        "uzair" => "Blue"
    );
    // how to access
    echo "fav color of salman is " .  $favColor["salman"] . "<br/>";
    foreach ($favColor as $key => $value) {
    echo "fav color of $key is " . $value . "<br/>";
    }
?>