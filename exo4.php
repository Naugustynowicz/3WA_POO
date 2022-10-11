<!DOCTYPE html>
<html>
<body>

<?php

// Pour les nombres de 1 à 100 compris.
//
//    Pour les multiples de 3, affichez Fizz au lieu du nombre.
//    Pour les multiples de 5, affichez Buzz au lieu du nombre.
//    Pour les nombres multiples de 3 et 5, affichez uniquement FizzBuzz.
//    Dans les autres cas le nombre lui-même.

function fizzBuzz(int $a){
    if($a<1||$a>100){
        return null;
    }
    if($a%3 == 0){
        if($a%5 == 0){
            echo 'FizzBuzz';
            return 'FizzBuzz';
        }
        echo 'Fizz';
        return 'Fizz';
    }
    if($a%5 == 0)
    {
        echo 'Buzz';
        return 'Buzz';
    }
    echo $a;
    return $a;
}

$result = fizzBuzz(9);
var_dump($result === 'Fizz');

$result = fizzBuzz(25);
var_dump($result === 'Buzz');

$result = fizzBuzz(15);
var_dump($result === 'FizzBuzz');

$result = fizzBuzz(1);
var_dump($result === 1);

?>

</body>
</html>
