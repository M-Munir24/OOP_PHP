<?php 

class Produk{
	public  $judul,
			$penulis,
			$penerbit,
			$harga,
			$jmlHalaman,
			$jmlWaktu,
			$tipe;

	public function __construct( $judul="judul", $penulis="penulis", $penerbit="penerbit", $harga=0, $jmlHalaman=0, $jmlWaktu=0, $tipe) {

		//echo "Hello Word";
		$this->judul=$judul;
		$this->penulis=$penulis;
		$this->penerbit=$penerbit;
		$this->harga=$harga;
		$this->jmlHalaman=$jmlHalaman;
		$this->jmlWaktu=$jmlWaktu;
		$this->tipe=$tipe;

	}

	// public function sayHello(){
	// 	return "Hello Word";
	// }
	public function getLable(){
		return "$this->penulis, $this->penerbit";
	}

	public function getInfoLengkap() {
		// komik : Naruto | Masashi Kisimoto, Shonen Jump (Rp. 30000) - 100 halaman.

		$str = "{$this->tipe} : {$this->judul} | {$this->getLable()} (Rp.{$this->harga})";

		if ($this->tipe == "Komik") {
			# code...
			$str .= " - {$this->jmlHalaman} Halaman.";
		}elseif ($this->tipe == "Game") {
			# code...
			$str .= " ~ {$this->jmlWaktu} Jam.";
		}
		return $str;

	}

}

/**
 * 
 */
class CetakInfoProduk{
	
	public function cetak( Produk $produk ){
		$str = "{$produk->judul} | {$produk->getLable()} (Rp. {$produk->harga})";
		return $str;
	}
}



$produk1 = new Produk("Naruto","Masashi Kisimoto","Shonen Jump", 30000, 100, 0, "Komik");
$produk2 = new Produk("Uncurted","Neil Druckmann","Sony Computer",250000, 0, 50, "Game");

// komik :Masashi Kisimoto, Shonen Jump
// Game :Neil Druckmann, Sony Computer
// Naruto | Masashi Kisimoto, Shonen Jump (Rp. 30000)

// komik : Naruto | Masashi Kisimoto, Shonen Jump (Rp. 30000) - 100 halaman.
// Game  : Uncurted | Neil Druckmann, Sony Computer (Rp. 250000) ~ 50 jam.


echo $produk1->getInfoLengkap();
echo "<br><hr>";
echo $produk2->getInfoLengkap();



?>