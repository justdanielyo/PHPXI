<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Mendefinisikan karakter encoding dan ukuran viewport -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Judul halaman -->
  <title>Jika ada 0 = tidakditunjukkan | HTML | PHP | CSS</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }

    .hasil {
      font-size: 18px;
      color: #333;
      margin-bottom: 20px;
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
  <?php
  //Looping dari 1 hingga 10
  for ($i = 1; $i <= 10; $i++) {
      //Hitung hasil perkalian $i dengan 5
      $hasil = $i * 5;
      //Jika hasil perkalian adalah kelipatan 10, maka skip ke iterasi berikutnya
      if ($hasil % 10 == 0) {
          continue;
      } 
      //Jika hasil perkalian lebih besar dari 55, maka hentikan looping
      elseif ($hasil > 55) {
          break;
      }
      //Tampilkan hasil perkalian dengan format string dan span warna biru
      echo "<p class='hasil'><b>$i x 5</b> = <span class='biru'>$hasil</span></p>";
  }
  ?>
</body>
</html>