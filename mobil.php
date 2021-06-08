<?php
/**
* program sederhana pendefinisian class dan pemanggilan class.
**/

class mobil 
{
	private $warna;
 	private $harga;

	public function Construct()
	{
		$this->warna = "Biru";
		$this->merk = "BMW";
		$this->harga = "10000000";

	}

	public function gantiwarna($warnaBaru)
	{
		$this->warna = $warnaBaru;
	}
	public function tampilwarna ()
	{
		echo "warna mobilnya : " . $this->warna;
	}
}

// membuat objek mobil 
$a = new mobil();
$b = new mobil();
$c = new mobil();
$d = new mobil();

// memanggil objek 
echo "<b>Mobil pertama</b><br>";
$a->tampilwarna();
echo "<br>mobil pertama ganti warna<br>";
$a->gantiwarna("Merah");
$a->tampilwarna();

// memanggil objek 
echo "<br><b>Mobil kedua</b><br>";
$b->gantiwarna("Hijau");
$b->tampilwarna();

// memanggil objek 
echo "<br><b>Mobil ketiga</b><br>";
$c->gantiwarna("Orange");
$c->tampilwarna();

// memanggil objek 
echo "<br><b>Mobil keempat</b><br>";
$d->gantiwarna("Volcador");
$d->tampilwarna();

?>