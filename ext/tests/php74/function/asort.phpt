--TEST--
Check for \Colopl\ColoplBc\Php74\asort() function. (colopl_bc.php74.compare_mode=3)
--INI--
date.timezone=UTC
error_log=
colopl_bc.php74.compare_mode=3
colopl_bc.php74.sort_mode=3
--EXTENSIONS--
colopl_bc
--FILE--
<?php
$array = ['a' => 1, '0' => 1, '' => 1, 'b' => 1, 'c' => 1, 'd' => 1, 'e' => 1, 'f' => 1, 'g' => 1, 'h' => 1, 'i' => 1, 'j' => 1, 'k' => 1, 'l' => 1, 'm' => 1, 'o' => 1, 'p' => 1, 'q' => 1, 'r' => 1, 's' => 1, 't' => 1, 'u' => 1, 'v' => 1, 'w' => 1, 'x' => 1, 'y' => 1, 'z' => 1];
\Colopl\ColoplBc\Php74\asort($array);
var_dump($array);
?>
--EXPECTF--
Incompatible sort detected

Deprecated: Colopl\ColoplBc\Php74\asort(): Incompatible sort detected in %s on line %d
array(27) {
  ["a"]=>
  int(1)
  ["m"]=>
  int(1)
  ["y"]=>
  int(1)
  ["x"]=>
  int(1)
  ["w"]=>
  int(1)
  ["v"]=>
  int(1)
  ["u"]=>
  int(1)
  ["t"]=>
  int(1)
  ["s"]=>
  int(1)
  ["r"]=>
  int(1)
  ["q"]=>
  int(1)
  ["p"]=>
  int(1)
  ["o"]=>
  int(1)
  ["l"]=>
  int(1)
  [0]=>
  int(1)
  ["k"]=>
  int(1)
  ["j"]=>
  int(1)
  ["i"]=>
  int(1)
  ["h"]=>
  int(1)
  ["g"]=>
  int(1)
  ["f"]=>
  int(1)
  ["e"]=>
  int(1)
  ["d"]=>
  int(1)
  ["c"]=>
  int(1)
  ["b"]=>
  int(1)
  [""]=>
  int(1)
  ["z"]=>
  int(1)
}