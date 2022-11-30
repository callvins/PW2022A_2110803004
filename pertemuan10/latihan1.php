<?php
$mahasiswa = ["Barkah", "45678910", "Biologi", "barkah@gmail.com"]
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
      <li><?php echo $mhs; ?></li>
    <?php endforeach; ?>
  </ul>
</body>

</html>