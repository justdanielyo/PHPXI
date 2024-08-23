<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kompensasi | HTML | PHP</title>
</head>
<body>
  <!-- Membuat form dengan metode POST -->
  <form method="POST">
    <!-- Label dan input untuk memasukkan jumlah jam kerja -->
    <label>Cek Gaji : </label><br>
    <input type="number" name="number" required>
    <!-- Button untuk mengirimkan form -->
    <button name="gaji">gaji</button>
  </form>
  <?php
  //Periksa apakah tombol "gaji" telah diklik
  if (isset($_POST['gaji'])) {
    // Ambil nilai dari input "number"
    $number = $_POST['number'];
    //Hitung jam kerja lebih dari 8 jam
    $jamlebih = $number - 8;
    //Bonus untuk 1 jam kerja lebih
    $bonus = 50000;
    //Periksa apakah jam kerja lebih 1 jam
    if ($jamlebih == 1) {
      //Tampilkan hasil jika jam kerja lebih 1 jam
      echo "Lama Kerja : " . $number . "<br>";
      echo "Jam Lebih : " . $jamlebih . "<br>";
      echo "Jumlah Kompensasi : " . $bonus . "<br>";
    } elseif ($jamlebih >= 1) {
      //Hitung kompensasi untuk jam kerja lebih dari 1 jam
      $next = $number - 9;
      $next2 = 25000 * $next;
      $hasil = $bonus + $next2;
      //Hasil jika jam kerja lebih dari 1 jam
      echo "Lama Kerja : " . $number . "<br>";
      echo "Jam Lebih : " . $jamlebih . "<br>";
      echo "Jumlah Kompensasi : " . $hasil . "<br>";
    } else {
      //Hasil jika jam kerja tidak lebih dari 8 jam
      echo "Lama Kerja : " . $number . "<br>";
      echo "Jam Lebih : " . $jamlebih . "<br>";
    }
  }
  ?>
</body>
</html>