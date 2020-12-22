<?php 

class Produk{
	public $judul = "judul", 
			$penulis = "penulis", 
			$penerbit = "penerbit", 
			$harga = 0;

	// public function sayHello(){
	// 	return "Hello Word";
	// }
	public function getLable(){
		return "$this->penulis, $this->penerbit";
	}

}

// $produk1 =  new Produk();
// $produk1->judul="Naruto";
// var_dump($produk);

// $produk2 = new Produk();
// $produk2->judul="Uncurted";
// $produk2->tambahProperty = "hahaha";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul="Naruto";
$produk3->penulis="Masashi Kishimoto";
$produk3->penerbit="Shonen Jump";
$produk3->harga=30000;

echo "komik : $produk3->penulis,$produk3->penerbit";
echo "<br>";

echo $produk3->getLable();

echo "<hr>";

$produk4 = new Produk();
$produk4->judul="Uncurted";
$produk4->penulis="Neil Druckmann";
$produk4->penerbit="Sony Computer";
$produk4->harga=250000;

echo "komik :". $produk3->getLable();
echo "<br>";
echo "Game :" . $produk4->getLable();





?>