<?php
$a = 5;
$b = 10;
echo var_dump($a != $b) . "<br/>";
?>
<?php
    $m=true;
    $n=false;
    // and
    if($m&&$n){
        echo "both are true <br/>";
    }else{
        echo "one is false <br/>";
    }
    // or
    if($m||$n){
        echo "one is true <br/>";
    }else{
        echo "both are false <br/>";
    }
    // xor
    if($m^$n){
        echo "if 1 is odd <br/>";
    }else{
        echo "if 1 is even <br/>";
    }
    // not
    if(!$m){
        echo "m is false <br/>";
    }else{
        echo "m is true <br/>";
    }
?>