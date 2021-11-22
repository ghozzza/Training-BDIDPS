<?php // strict requirement

function addNumbers(int $a, int $b) {
  return $a - $b;
}
echo addNumbers(5, 7);
// since strict is enabled and "5 days" is not an integer, an error will be thrown
?>