<?php 

// class Buah
abstract class Buah{
	private $warna;

	// public function makan(){
		//kunyah
		//nyam.. nyam..
	//}
	abstract public function makan();

	public function setWarna($warna){
		$this->warna = $warna;
	}
} 

/**
 * 
 */
class Apel extends Buah
{
	
	publi function makan()
	{
		//kunyah
		//sampai bagian tengah
	}
}

/**
 * 
 */
class Jeruk extends Buah
{
	
	public function makan()
	{
		//kupas
		//kunyah
	}
}

// $apel = new Apel();
// $apel->makan();

$buah = new Buah();
$buah->makan();




 ?>