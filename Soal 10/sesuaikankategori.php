<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sesuaikan Kategori | HTML | PHP | CSS</title>
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
  $data = [12, 15, 17, 20, 25, 30, 35, 40, 45, 50];
  //Menampilkan list usia
  echo "<p class='hasil'><b>List Usia</b> : ";
  foreach ($data as $usia) {
    //Menampilkan setiap usia dengan koma sebagai pemisah
    echo $usia . ", ";
  }
  echo "</p>";
  //Variabel untuk menghitung jumlah kategori dewasa dan anak-anak
  $dewasa = 0;
  $anak = 0;
  //Loop untuk menghitung jumlah kategori dewasa dan anak-anak
  foreach ($data as $usia) {
    //Jika usia >= 17, maka kategori dewasa
    if ($usia >= 17) {
      //Menambahkan 1 ke variabel dewasa
      $dewasa++; // ++ untuk menambahkan 1
    } else {
      //Jika usia < 17, maka kategori anak-anak
      //Menambahkan 1 ke variabel anak
      $anak++;
    }
  }
  //Hasil
  echo "<p class='hasil'><b>Jumlah Kategori Dewasa</b> : " . $dewasa . "</p>";
  echo "<p class='hasil'><b>Jumlah Kategori Anak-anak</b> : " . $anak . "</p>";
  ?>
</body>
</html>