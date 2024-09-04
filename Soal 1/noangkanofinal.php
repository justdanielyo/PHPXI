<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Noangkanofinal | HTML | PHP | CSS</title>
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
    <?php
    // Teks yang akan di proses
    $teks = "Selamat ulang tahun ke - 17!";

    // Menggunakan regular expression untuk menghapus semua karakter non-angka
    // '/[^0-9]/' adalah pattern yang mencari karakter non-angka
    // '' adalah pengganti untuk karakter non-angka (yaitu dihapus)
    // $teks adalah string yang akan di proses
    $number = preg_replace('/[^0-9]/' ,'' , $teks );

    // Cek jika $number tidak kosong (artinya teks mengandung angka)
    if ($number) {
        // Jika teks mengandung angka, maka tampilkan angka-angka tersebut
        // str_split($number, 1) memecah string menjadi array karakter
        // implode(', ', ...) menggabungkan array karakter menjadi string dengan pemisah ', '
        echo "<p class='hasil'><b>Teks mengandung angka</b> : " . implode(', ', str_split($number, 1)) . "</p>";
    } else {
        // Jika teks tidak mengandung angka, maka tampilkan pesan
        echo "<p class='hasil'><b>Teks tidak mengandung angka</b>.</p>";
    }
    ?>
  </div>
</body>
</html>