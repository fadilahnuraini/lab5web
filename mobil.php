<!DOCTYPE html>
<html>
<head>
  <title>Contoh PHP dan CSS</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <?php
  /**
  * Program sederhana pendefinisian class dan pemanggilan class.
  **/
  class Mobil
  {
    private $warna;
    private $merk;
    private $harga;
    public function __construct()
    {
      $this->warna = "Biru";
      $this->merk = "BMW";
      $this->harga = "10000000";
    }
    public function gantiWarna ($warnaBaru)
    {
      $this->warna = $warnaBaru;
    }
    public function tampilWarna ()
    {
      echo "Warna mobilnya : " . $this->warna;
    }
  }
  // membuat objek mobil
  $a = new Mobil();
  $b = new Mobil();
  // memanggil objek
  echo "<h1>Mobil pertama</h1>";
  $a->tampilWarna();
  echo "<br>Mobil pertama ganti warna<br>";
  $a->gantiWarna("Merah");
  $a->tampilWarna();
  // memanggil objek
  echo "<h1>Mobil kedua</h1>";
  $b->gantiWarna("Hijau");
  $b->tampilWarna();
  ?>
</body>
</html>
