<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perkalian Terbalik | HTML | PHP| CSS</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }

    .judul {
      font-size: 24px;
      color: #333;
      margin-bottom: 20px;
    }

    .hasil {
      font-size: 18px;
      color: #333;
      margin-bottom: 10px;
    }

    .hasil b {
      color: #337ab7;
    }

    .biru {
      color: blue;
    }
  </style>
</head>
<body>
  <div class="judul">Perkalian 1-2 terbalik</div>
  <br>
  <?php
  //Loop untuk menghitung perkalian 1 terbalik
  for ($angka = 1; $angka <= 2; $angka++) { 
    //Loop untuk menghitung perkalian dari 10 sampai 1
    for ($perkalian = 10; $perkalian >= 1; $perkalian--) {
      // Menampilkan hasil perkalian
      echo "<p class='hasil'><b>$perkalian x $angka</b> = <span class='biru'>" . ($angka * $perkalian) . "</span></p>";
    }
    echo "<br>";
  }
  ?>
</body>
</html>