<?php 

abstract class Produk{
    protected $judul,
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

public function getHarga(){
			return $this->harga - ($this->harga * $this->diskon / 100);
		}


	public function getLable(){
		return "$this->penulis, $this->penerbit";
	}


abstract public function getInfo();

}


 ?>