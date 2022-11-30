<?php
function luas_dua_kubus($a, $b)
{
  $kubusA = $a * $a * $a;
  $kubusB = $b * $b * $b;
  $total = $kubusA + $kubusB;

  return $total;
}

echo luas_dua_kubus(9, 4);
