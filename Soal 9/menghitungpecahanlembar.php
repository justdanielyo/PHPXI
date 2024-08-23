<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menghitung pecahan lembar | HTML | PHP</title>
</head>
<body>
  <?php
  //Untuk menghitung pecahan lembar uang
  function hitung_pecahan_lembar($uang) {
    //Mendefinisikan array pecahan uang
    $pecahan = array(100000, 50000, 20000, 10000, 5000, 2000, 1000, 500, 100);
    //Mendefinisikan array untuk menyimpan hasil
    $lembar = array();
    //Loop untuk setiap pecahan uang
    foreach ($pecahan as $nilai) {
      //Menghitung jumlah lembar uang untuk setiap pecahan
      $jumlah_lembar = floor($uang / $nilai);
      //Jika jumlah lembar uang lebih dari 0
      if ($jumlah_lembar > 0) {
        //Menambahkan hasil ke array lembar
        $lembar[] = "Rp. " . number_format($nilai, 0, ',', '.') . " : " . $jumlah_lembar;
        //Mengurangi uang dengan jumlah lembar uang yang telah dihitung
        $uang -= $jumlah_lembar * $nilai;
      }
    }
    //Mengembalikan hasil
    return $lembar;
  }
  $uang = 140500;
  // Memanggil fungsi hitung_pecahan_lembar
  $lembar = hitung_pecahan_lembar($uang);
  // Menampilkan hasil
  echo "Uang : Rp. " . number_format($uang, 0, ',', '.') . ".<br>";
  echo "Lembar Rupiah :<br>";
  // Loop untuk menampilkan hasil
  foreach ($lembar as $lembaran) {
    echo $lembaran . "<br>";
  }
  ?>
</body>
</html>