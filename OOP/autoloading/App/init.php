<?php  

// require_once 'Produk/infoProduk.php'; //class interface harus ditempat pertama, kemudian class produk yang ada class abstract-nya, lalu class turunannya.
// require_once 'Produk/produk.php';
// require_once 'Produk/manga.php';
// require_once 'Produk/game.php';
// require_once 'Produk/cetakInfoProduk.php';
//dari pada ditulis manual satu persatu ada fungsi yang lebih fleksibel

//spl_autoload_register();  
//berfungsi untuk memanggil autoloading semuaa class jadi lebih fleksibel, daan tidak perlu ditulis satu persatu


spl_autoload_register(function($class){

	require_once __DIR__ . '/produk/' . $class . '.php';

});