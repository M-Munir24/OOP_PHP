<?php 

class Produk{
	public  $judul,
			$penulis,
			$penerbit,
			$harga;

	public function __construct( $judul="judul", $penulis="penulis", $penerbit="penerbit", $harga="harga") {

		//echo "Hello Word";
		$this->judul=$judul;
		$this->penulis=$penulis;
		$this->penerbit=$penerbit;
		$this->harga=$harga;

	}

	// public function sayHello(){
	// 	return "Hello Word";
	// }
	public function getLable(){
		return "$this->penulis, $this->penerbit";
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



$produk1 = new Produk("Naruto","Masashi Kisimoto","Shonen Jump", 30000);
$produk2 = new Produk("Uncurted","Neil Druckmann","Sony Computer",250000);
$produk3 = new Produk("Dragon Ball");

echo "komik :". $produk1->getLable();
echo "<br><hr>";

echo "Game :" . $produk2->getLable();
echo "<br><hr>";

var_dump($produk3);
echo "<br><hr>";

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);


?>