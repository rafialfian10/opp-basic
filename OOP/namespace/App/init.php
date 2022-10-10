<?php  

// require_once 'Produk/infoProduk.php'; //class interface harus ditempat pertama, kemudian class produk yang ada class abstract-nya, lalu class turunannya.
// require_once 'Produk/produk.php';
// require_once 'Produk/manga.php';
// require_once 'Produk/game.php';
// require_once 'Produk/cetakInfoProduk.php';
// require_once 'Produk/user.php';
// require_once 'Service/user.php';
//dari pada ditulis manual satu persatu ada fungsi yang lebih fleksibel

//spl_autoload_register();  
//berfungsi untuk memanggil autoloading semuaa class jadi lebih fleksibel, daan tidak perlu ditulis satu persatu


spl_autoload_register(function($class){
	// App\Produk\user = ["App", "Produk", "user"], karena yang dibutuhkan hanya user (belakang saja), maka lakukan fungsi explode untuk memecah string-nya ($class) yang berdasarkan pemisah tertentu(disini pemisahnya adalah tanda \ ). jadi ketika di explode maka akan menjadi array, dan kemudian ambil yang bagian user-nya saja / elemen terakhir dengan menggunakan fungsi end pada $class
	$class = explode('\\', $class);
	$class = end($class);

	require_once __DIR__ . '/Produk/' . $class . '.php';

});

spl_autoload_register(function($class){
	$class = explode('\\', $class);
	$class = end($class);

	require_once __DIR__ . '/Service/' . $class . '.php';

});

