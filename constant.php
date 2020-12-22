<?php 

// define('NAMA', 'Muhammad Munir');
// echo NAMA;

// echo "<hr>";

// const UMUR =  24;
// echo UMUR;

//class Coba{
	//define('NAMA', 'Muhammad Munir'); //titdak bisa
	//const NAMA = 'Muhammad Munir';

//}

//echo Coba::NAMA;


//MAGIC CONTANTA
// echo __LINE__;
// echo "<hr>";

// echo __FILE__;
// echo "<hr>";

// echo __DIR__;
// echo "<hr>";

// function coba(){
// 	return __FUNCTION__;
// }

// echo coba();

class Coba {
	public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;



 ?>