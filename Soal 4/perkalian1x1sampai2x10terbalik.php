<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perkalian Terbalik | Html | PHP</title>
</head>
<body>
  <?php
  echo "Perkalian 1-2 terbalik";
  echo "<br>";
  echo "<br>";
  //Loop untuk menghitung perkalian 1 terbalik
  for ($angka = 1; $angka <= 2; $angka++) { //++ adalah operator kenaikan, sedangkan -- penurunan
    //Loop untuk menghitung perkalian dari 10 sampai 1
    for ($perkalian = 10; $perkalian >= 1; $perkalian--) {
      // Menampilkan hasil perkalian
      echo "$perkalian x $angka = " . ($angka * $perkalian) . "<br>";
    }
    echo "<br>";
  }
  ?>
</body>
</html>