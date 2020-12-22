<?php 

class Produk{
	public  $judul,
			$penulis,
			$penerbit,
			$harga;	
		
	public function __construct( $judul="judul", $penulis="penulis", $penerbit="penerbit", $harga=0) {

		
		$this->judul=$judul;
		$this->penulis=$penulis;
		$this->penerbit=$penerbit;
		$this->harga=$harga;
 
	
}


	public function getLable(){
		return "$this->penulis, $this->penerbit";
	}

	public function getInfoProduk() {

		$str = "{$this->judul} | {$this->getLable()} (Rp.{$this->harga})";
		return $str;

	}

}


class Komik extends Produk {
	public $jmlHalaman;

	public function __construct($judul="judul", $penulis="penulis", $penerbit="penerbit", $harga=0, $jmlHalaman=0 ){

		parent::__construct($judul, $penulis, $penerbit, $harga);

		$this->jmlHalaman = $jmlHalaman;

	}

	public function getInfoProduk(){
		$str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
		return $str;

	}
	
}

class Game extends Produk {
	public $jmlWaktu;

	public function __construct($judul="judul", $penulis="penulis", $penerbit="penerbit", $harga=0, $jmlWaktu=0 ){
	parent::__construct($judul, $penulis, $penerbit, $harga);

	$this->jmlWaktu = $jmlWaktu;

		}
	
	public function getInfoProduk(){
		$str = "Game : " . parent::getInfoProduk() . " ~ {$this->jmlWaktu} Jam.";
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



$produk1 = new Komik("Naruto","Masashi Kisimoto","Shonen Jump", 30000, 100);
$produk2 = new Game("Uncurted","Neil Druckmann","Sony Computer",250000,50);



echo $produk1->getInfoProduk();
echo "<br><hr>";
echo $produk2->getInfoProduk();



?>