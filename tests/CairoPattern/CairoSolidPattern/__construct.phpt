--TEST--
new CairoSolidPattern [ __construct method ]
--SKIPIF--
<?php
if(!extension_loaded('cairo')) die('skip - Cairo extension not available');
?>
--FILE--
<?php
$red = 0.8;
$green = 0.6;
$blue = 0.5;
$alpha = 0.7;

$pattern = new CairoSolidPattern($red, $green, $blue);
var_dump($pattern);

$values =$pattern->getRGBA();
var_dump($values);
var_dump($red === $values['red']);
var_dump($green === $values['green']);
var_dump($blue === $values['blue']);

$pattern = new CairoSolidPattern($red, $green, $blue, $alpha);
var_dump($pattern);

$values =$pattern->getRGBA();
var_dump($values);
var_dump($red === $values['red']);
var_dump($green === $values['green']);
var_dump($blue === $values['blue']);
var_dump($alpha === $values['alpha']);
?>
--EXPECTF--
object(CairoSolidPattern)#%d (0) {
}
array(4) {
  ["red"]=>
  float(0.8)
  ["green"]=>
  float(0.6)
  ["blue"]=>
  float(0.5)
  ["alpha"]=>
  float(1)
}
bool(true)
bool(true)
bool(true)
object(CairoSolidPattern)#%d (0) {
}
array(4) {
  ["red"]=>
  float(0.8)
  ["green"]=>
  float(0.6)
  ["blue"]=>
  float(0.5)
  ["alpha"]=>
  float(0.7)
}
bool(true)
bool(true)
bool(true)
bool(true)