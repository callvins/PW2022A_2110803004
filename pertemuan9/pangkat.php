<?php
function pangkat($angka, $pangkat)
{
  $bil = $angka;
  for ($i = 0; $i < ($pangkat - 1); $i++) {
    $bil = $bil * $angka;
  }
  return $bil;
}
echo pangkat(5, 4);
