<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kedua Variabel | HTML | PHP</title>
</head>
<body>
  <?php
  $array1 = [80, 77, 65, 89, 55, 12, 90, 86];
  $array2 = [77, 99, 55, 81, 45, 90, 91, 98];
  //Menggunakan fungsi array_intersect untuk mencari elemen yang sama di kedua array
  $common_elements = array_intersect($array1, $array2);
  //Fungsi array_diff untuk mencari elemen yang unik di kedua array
  //Fungsi array_merge untuk menggabungkan hasilnya
  $unique_elements = array_merge(array_diff($array1, $array2), array_diff($array2, $array1));
  //Fungsi implode untuk mengubah array menjadi string yang dipisahkan oleh koma
  $common_elements_str = implode(', ', $common_elements);
  $unique_elements_str = implode(', ', $unique_elements);
  //Hasil
  echo "Bilangan yang ada di kedua variabel: $common_elements_str" . "<br>";
  echo "Bilangan yang tidak ada di kedua variabel: $unique_elements_str";
  ?>
</body>
</html>