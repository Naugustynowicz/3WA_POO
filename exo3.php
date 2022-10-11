

<!DOCTYPE html>
<html>
<body>

<?php

//Créez une fonction mapped avec trois arguments glue, array et symbol.
//Voyez l'exemple ci-dessous. Elle permettra de rassembler les clés et les valeurs dans une chaîne de caractères.

// why not using next?

function mapped(array $numbers, string $glue, string $symbol){
    $result = key($numbers).' '.$symbol.' '.current($numbers);
    while(next($numbers)){
        $result = $result.$glue.key($numbers).' '.$symbol.' '.current($numbers);
    }
    echo($result);
    return $result;
}

$result = mapped(numbers: ['x' => 1, 'y' => 2, 'z' => 3, 't' => 7], glue : ', ', symbol : "=");
var_dump($result === 'x = 1, y = 2, z = 3, t = 7');


?>

</body>
</html>