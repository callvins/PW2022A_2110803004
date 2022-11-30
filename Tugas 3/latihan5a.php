<?php
if (
  !isset($_GET["angka"])
) {
  echo "Silahkan input angka melalui link dengan format (?angka=)";
  exit;
}
$j = $_GET["angka"];
if (!empty($j)) {
  echo "";
} else {
  die("Silahkan isikan angkanya! dengan format (?angka=)");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Latihan5a</title>
</head>

<body>
  <ul>
    <?php for ($i = 1; $i <= $j; $i++) {
      echo $i;
    } ?> <br>
    <?php for ($i = 1; $i <= $j - 1; $i++) {
      echo $i;
    } ?> <br>
    <?php for ($i = 1; $i <= $j - 2; $i++) {
      echo $i;
    } ?> <br>
    <?php for ($i = 1; $i <= $j - 3; $i++) {
      echo $i;
    } ?> <br>
    <?php for ($i = 1; $i <= $j - 4; $i++) {
      echo $i;
    } ?> <br>
    <?php for ($i = 1; $i <= $j - 5; $i++) {
      echo $i;
    } ?> <br>
    <?php for ($i = 1; $i <= $j - 6; $i++) {
      echo $i;
    } ?> <br>
    <?php for ($i = 1; $i <= $j - 7; $i++) {
      echo $i;
    } ?> <br>
    <?php for ($i = 1; $i <= $j - 8; $i++) {
      echo $i;
    } ?> <br>
    <?php for ($i = 1; $i <= $j - 9; $i++) {
      echo $i;
    } ?>
  </ul>
</body>

</html>