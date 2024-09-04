<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kompensasi | HTML | PHP | CSS</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }

    .container {
      width: 80%;
      margin: 40px auto;
      padding: 20px;
      background-color: #fff;
      border: 1px solid #ddd;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    form {
      margin-top: 20px;
    }

    label {
      font-weight: 600;
      font-size: 14px;
      margin-bottom: 10px;
      display: block;
    }

    input[type="number"] {
      background-color: #eee;
      border: none;
      margin: 8px 0;
      padding: 10px 5px;
      font-size: 13px;
      border-radius: 8px;
      width: 20%;
      outline: none;
    }

    button[type="submit"] {
      background-color: #00bfff;
      color: #fff;
      font-size: 12px;
      padding: 10px 25px;
      border: 1px solid transparent;
      border-radius: 8px;
      font-weight: 600;
      letter-spacing: 0.5px;
      text-transform: uppercase;
      margin-top: 10px;
      cursor: pointer;
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
  <div class="container">
    <!-- Membuat form dengan metode POST -->
    <form method="POST">
      <!-- Label dan input untuk memasukkan jumlah jam kerja -->
      <label>Cek Gaji : </label><br>
      <input type="number" name="number" required>
      <!-- Button untuk mengirimkan form -->
      <button type="submit" name="gaji">Gaji</button>
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
        echo "<p class='hasil'><b>Lama Kerja</b> : " . $number . "<br>";
        echo "<b>Jam Lebih</b> : " . $jamlebih . "<br>";
        echo "<b>Jumlah Kompensasi</b> : " . $bonus . "<br></p>";
      } elseif ($jamlebih >= 1) {
        //Hitung kompensasi untuk jam kerja lebih dari 1 jam
        $next = $number - 9;
        $next2 = 25000 * $next;
        $hasil = $bonus + $next2;
        //Hasil jika jam kerja lebih dari 1 jam
        echo "<p class='hasil'><b>Lama Kerja</b> : " . $number . "<br>";
        echo "<b>Jam Lebih</b> : " . $jamlebih . "<br>";
        echo "<b>Jumlah Kompensasi</b> : " . $hasil . "<br></p>";
      } else {
        //Hasil jika jam kerja tidak lebih dari 8 jam
        echo "<p class='hasil'><b>Lama Kerja</b> : " . $number . "<br>";
        echo "<b>Jam Lebih</b> : " . $jamlebih . "<br></p>";
      }
    }
    ?>
  </div>