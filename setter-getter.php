<?php 

class Produk{
	private $judul,
			$penulis,
			$penerbit,
			$harga,
			$diskon = 0;

	//protected $diskon = 0; //game 

	//protected $harga;	

		
	public function __construct( $judul="judul", $penulis="penulis", $penerbit="penerbit", $harga=0) {

		
		$this->judul=$judul;
		$this->penulis=$penulis;
		$this->penerbit=$penerbit;
		$this->harga=$harga;

}

	public function setJudul($judul){

		// if (!is_string($judul)) {
		// 	# code...
		// 	throw new Exception("Judul Harus String", 1);
			
		// }
		//
		$this->judul = $judul;

	}

	public function getJudul(){
		return $this->judul;
	}

	public function setPenulis($penulis){
		$this->penulis = $penulis;
	}

	public function getPenulis(){
		return $this->penulis;
	}

	public function setPenerbit($penerbit){
		$this->penerbit = $penerbit;
	}

	public function getPenerbit(){
		return $this->penerbit;
	}

	public function setHarga($harga){
		$this->harga=$harga;
	}

	public function getDiskon(){
		return $this->diskon;

	}

	public function setDiskon($diskon){
			$this->diskon = $diskon;
		}

// public function setDiskon($diskon){
// 	$this->diskon = $diskon;
// }

public function getHarga(){
			return $this->harga - ($this->harga * $this->diskon / 100);
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
		// public function setDiskon($diskon){
		// 	$this->diskon = $diskon;
		// }

		// public function getHarga(){
		// 	return $this->harga;
		// }
	
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
echo "<br>";
echo $produk2->getInfoProduk();

echo "<hr>";

//$produk2->harga = 200; //legal

$produk2->setDiskon(50);
echo $produk2->getHarga();

echo "<hr>";
$produk1->setJudul("judulbaru");
echo $produk1->getJudul();

?>