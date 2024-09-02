<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rata-Rata | HTML | PHP | CSS</title>
</head>
<body>
  <?php
  $student = [
    [
      'nama' => 'Andi', //<- Nama siswa
      'nilai' => [80, 78, 82, 78, 88], //<-Nilai siswa
    ],
    [
      'nama' => 'Beni',
      'nilai' => [86, 70, 80, 85, 81],
    ],
    [
      'nama' => 'Dani',
      'nilai' => [83, 91, 70, 73, 81],
    ],
    [
      'nama' => 'Eko',
      'nilai' => [89, 85, 84, 86, 88],
    ],
  ];
  //Menggunakan loop foreach untuk mengakses data siswa
  foreach ($student as $murid) {
    //Menghitung jumlah nilai siswa
    $jumlah_nilai = array_sum($murid['nilai']);
    //Menghitung rata-rata nilai siswa
    $rata_rata = $jumlah_nilai / count($murid['nilai']);
    //Hasil
    echo "<b>Rata-rata nilai</b> <span style='color:blue'>" . $murid['nama'] . "</span> <b>adalah</b> <span style='color:blue'>" . $rata_rata . "</span><br>";
  }
  ?>
</body>
</html>