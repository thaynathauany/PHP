<?php

$array = [
    1 => 'um',
    2 => 'dois',
    3 => 'tres'
];

foreach ($array as $numeral => $nomeNumero) {
    echo "$numeral em portugûes é: $nomeNumero" .PHP_EOL;
}

echo "Total: " . count($array) . PHP_EOL;
//echo "Total: " . sizeof($array) . PHP_EOL; - MENOS USADO

var_dump(array_is_list($array));


//Floats terão a parte “decimal” removida
//Boleanos serão false = 0 e true = 1

// <?php
// $a = 1234; // decimal number
// $a = 0123; // octal number (equivalent to 83 decimal)
// $a = 0o123; // octal number (as of PHP 8.1.0)
// $a = 0x1A; // hexadecimal number (equivalent to 26 decimal)
// $a = 0b11111111; // binary number (equivalent to 255 decimal)
// $a = 1_234_567; // decimal number (as of PHP 7.4.0)
//