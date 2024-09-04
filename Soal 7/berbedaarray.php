<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Berbeda Array | HTML | PHP | CSS</title>
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
    .underline {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <?php
  //Untuk membandingkan jumlah karakter dua nama
  function bandingkan_nama($nama1, $nama2) {
    //Menghitung jumlah karakter nama1
    $jumlah_karakter_nama1 = strlen(strip_tags($nama1));
    //Menghitung jumlah karakter nama2
    $jumlah_karakter_nama2 = strlen(strip_tags($nama2)); 
    //Membandingkan jumlah karakter
    if ($jumlah_karakter_nama1 > $jumlah_karakter_nama2) {
      //Jika nama1 memiliki jumlah karakter lebih banyak
      $selisih = $jumlah_karakter_nama1 - $jumlah_karakter_nama2;
      echo "<p class='hasil'><span class='underline'>$nama1</span> memiliki jumlah karakter lebih banyak dari <span class='underline'>$nama2</span> : Selisih $selisih karakter</p>";
    } elseif ($jumlah_karakter_nama2 > $jumlah_karakter_nama1) {
      //Jika nama2 memiliki jumlah karakter lebih banyak
      $selisih = $jumlah_karakter_nama2 - $jumlah_karakter_nama1;
      //Hasil
      echo "<p class='hasil'>$nama2 memiliki jumlah karakter lebih banyak dari $nama1 : Selisih $selisih karakter</p>";
    } else {
      //Jika kedua nama memiliki jumlah karakter yang sama
      echo "<p class='hasil'>Kedua nama memiliki jumlah karakter yang sama</p>";
    }
  }
  $nama1 = "<b>Fema Flamelina Putri</b>";
  $nama2 = "<b>Artasya Legina</b>";
  //Memanggil fungsi bandingkan_nama
  bandingkan_nama($nama1,$nama2);
  ?>
</body>
</html>