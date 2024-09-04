<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>100 ada 2 | HTML | PHP | CSS</title>
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
  </style>
</head>
<body>
  <?php
  $data = [80, 90, 75, 100, 85, 100, 66];
  $cari = 100;
  //Variabel untuk menghitung jumlah kemunculan
  $jumlah_100 = 0;
  //Loop setiap elemen dalam array
  foreach ($data as $nilai) {
    //Jika nilai sama dengan angka yang dicari, tambahkan 1 ke jumlah
    if ($nilai == $cari) {
      $jumlah_100++;
    }
  }
  //Tampilkan hasil
  echo "<p class='hasil'><b>Jumlah angka 100</b> = <span>" . $jumlah_100 . "</span></p>";
  ?>
</body>
</html>