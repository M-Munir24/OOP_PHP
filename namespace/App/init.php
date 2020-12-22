<?php 
// require_once 'Produk/InfoProduk.php';
// require_once 'Produk/Produk.php';
// require_once 'Produk/Komik.php';
// require_once 'Produk/Game.php';
// require_once 'Produk/CetakInfoProduk.php';
// require_once 'Produk/User.php';

// require_once 'service/User.php';


		// function autoload($class){
		// }
		//spl_autoload_register(autoload());

spl_autoload_register(function($class){


	$class = explode('\\', $class); // App\Produk\User = ["App","Produk","User"]
	$class = end($class); // App\Produk\User = [User]

	require_once __DIR__ . '/Produk/'.$class.'.php';
});

spl_autoload_register(function($class){
	$class = explode('\\', $class);
	$class = end($class);
	
	require_once __DIR__ . '/Service/'.$class.'.php';
});

 ?>