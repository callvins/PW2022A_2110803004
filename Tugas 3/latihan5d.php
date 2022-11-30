<!DOCTYPE html>
<html lang="en">
<head>
  <title>Latihan5d</title>
</head>
<body>
  <ul>
    <form action="" method="post">
      Masukkan angka :
      <input type="number" name="angka" autocomplete="off">
      <br>
      <button type="submit" name="submit" value="Submit">Tampilkan</button>
    </form>
</body>
</html>
<br>
<?php
if (
  !isset($_POST["angka"])
) {
  echo "";
  exit;
}
$j = $_POST["angka"];
if (!empty($j)) {
  echo "";
} else {
  die("");
}
for ($i = 1; $i <= $j; $i++) {
  echo $i;
}
echo "<br>";
for ($i = 1; $i <= $j - 1; $i++) {
  echo $i;
}
echo "<br>";
for ($i = 1; $i <= $j - 2; $i++) {
  echo $i;
}
echo "<br>";
for ($i = 1; $i <= $j - 3; $i++) {
  echo $i;
}
echo "<br>";
for ($i = 1; $i <= $j - 4; $i++) {
  echo $i;
}
echo "<br>";
for ($i = 1; $i <= $j - 5; $i++) {
  echo $i;
}
echo "<br>";
for ($i = 1; $i <= $j - 6; $i++) {
  echo $i;
}
echo "<br>";
for ($i = 1; $i <= $j - 7; $i++) {
  echo $i;
}
echo "<br>";
for ($i = 1; $i <= $j - 8; $i++) {
  echo $i;
}
echo "<br>";
for ($i = 1; $i <= $j - 9; $i++) {
  echo $i;
}
?>