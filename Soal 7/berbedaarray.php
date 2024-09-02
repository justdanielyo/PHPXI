<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Berbeda Array | HTML | PHP | CSS</title>
  <style>
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
    $jumlah_karakter_nama1 = strlen($nama1);
    //Menghitung jumlah karakter nama2
    $jumlah_karakter_nama2 = strlen($nama2); // strlen untuk menghitung karakter misal "Fema Flamelina Putri"
    //Membandingkan jumlah karakter
    if ($jumlah_karakter_nama1 > $jumlah_karakter_nama2) {
      //Jika nama1 memiliki jumlah karakter lebih banyak
      $selisih = $jumlah_karakter_nama1 - $jumlah_karakter_nama2;
      echo "<span class='underline'>$nama1</span> memiliki jumlah karakter lebih banyak dari <span class='underline'>$nama2</span> : Selisih $selisih karakter";
    } elseif ($jumlah_karakter_nama2 > $jumlah_karakter_nama1) {
      //Jika nama2 memiliki jumlah karakter lebih banyak
      $selisih = $jumlah_karakter_nama2 - $jumlah_karakter_nama1;
      //Hasil
      echo "$nama2 memiliki jumlah karakter lebih banyak dari $nama1 : Selisih $selisih karakter";
    } else {
      //Jika kedua nama memiliki jumlah karakter yang sama
      echo "Kedua nama memiliki jumlah karakter yang sama";
    }
  }
  $nama1 = "<b>Fema Flamelina Putri</b>";
  $nama2 = "<b>Artasya Legina</b>";
  //Memanggil fungsi bandingkan_nama
  bandingkan_nama($nama1,$nama2);
  ?>
</body>
</html>