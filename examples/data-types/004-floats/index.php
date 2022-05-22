<?php

$random = rand() * 0.5;

echo $random;
echo "<br />";
echo gettype($random);
echo "<br />";

if (is_float($random) == 1) {
  echo "É um float!";
} else {
  echo "Não é um float!";
}

?>
