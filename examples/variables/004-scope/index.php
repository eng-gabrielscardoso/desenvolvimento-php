<?php

/**
 * local: variable declarated in function
 * global: variable declarated out function
 * static: variable declarated in function, but the value remains saved in function calls
 * function parametres: variables passed to function, that could be used by function.
 */

/**
 * local variables ccouldn't be used witchout the function
 * the value assinged is always reseted when the function is finalised'
 */

$x = 10;

function test() {
  $x = 10;
  echo "$x <br />";
}

echo "$x <br />";
test();

$y = "asd";

echo "$y <br />";

if (true) {
  $y = "dsa";
}

function test2() {
  /**
   * By default global variables couldn't be accessed
   */
  global $y;
  echo "$y <br />";  
}

function test3() {
  $a = 0;
  $a++;

  echo "$a <br />";
}

test3();
test3();
test3();

function test4() {
  static $a = 0;
  $a++;

  echo "$a <br />";
}

test3();
test3();
test3();

function sum ($a = 0, $b = 0) {
  echo $a + $b;
  echo "<br />";
}

sum(2, 3);
sum(5, 4);

?>
