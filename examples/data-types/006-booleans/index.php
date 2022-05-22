<?php

/**
 * Some values also could be considered as false, as:
 * 0
 * "0"
 * 0.0
 * []
 * null
 */

if (5>1) {
  echo "True\n";
} else {
  echo "False\n";
}

$random = true;

if (is_bool($random)) {
  echo "True\n";
} else {
  echo "False\n";
}

?>
