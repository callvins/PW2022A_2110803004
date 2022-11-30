<?php
$mahasiswa = [
  ["Barkah", "45678910", "Biologi", "barkah@gmail.com"],
  ["Adam", "1178910", "Kimia", "adam@gmail.com"],
  ["Kalvin", "2367892", "Hukum", "kalvin@gmail.com"]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Coba</title>
</head>
<body>
  <h1>Daftar Mahasiswa</h1>
  <ul>
    <?php foreach ($mahasiswa as $mhs) : ?>
      <li><?php echo $mhs[0]; ?></li>
      <li><?php echo $mhs[1]; ?></li>
      <li><?php echo $mhs[2]; ?></li>
      <li><?php echo $mhs[3]; ?></li>
    <?php endforeach; ?>
  </ul>
</body>
</html>