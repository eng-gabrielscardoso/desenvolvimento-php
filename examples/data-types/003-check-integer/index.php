<?php

# rand() function returns a random integer number
$random = rand();

echo $random;

echo "<br />";

/**
 * The is_int() function returns the int value of a boolean value
 * So, if returns 1 is true, else is false
 */

if (is_int($random) == 1) {
  echo "É um inteiro!";
} else {
  echo "Não é um inteiro!";
}

?>
