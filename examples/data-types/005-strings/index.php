<?php
/**
 * The PHP default doesn't stripe the HTML tags
 * This is the reason why we could use <br /> tag without a HTML file extension
 */
echo "Testing text";

echo "<br />";

$name = "Gabriel";

if (is_string($name) == 1) {
  echo "É uma string";
} else {
  echo "Não é uma string";
}

echo "<br />";

?>
