<?php  

//class interface harus ditempat pertama, kemudian class produk yang ada class abstract-nya, lalu class turunannya.
	// require_once 'App/Produk/infoProduk.php'; 
	// require_once 'App/Produk/produk.php';
	// require_once 'App/Produk/manga.php';
	// require_once 'App/Produk/game.php';
	// require_once 'App/Produk/cetakInfoProduk.php';
//require_once ini bisa kita pisah menjadi file tersendiri, dalam kasus ini saya pindah ke folder App dengan nama file init.php. Tapi di index cukup panggil file init.php saja

require_once 'App/init.php';

$produk1 = new manga("Naruto", "Masashi Kishimoto", "Shueisha", "2006", 30000, 220);       
$produk2 = new manga("Shingeki no Kyojin", "Isayama Hajime", "Kondansha", "2009", 50000, 300);
$produk3 = new game("Uncharted", "Neil Druckmann", "Naughty Dog", "2020", 400000, 50);
$produk4 = new game("Metal Gear Solid V", "Hideo Kojima", "Konami", "2019", 350000, 70);


//set diskon
$produk1->setDiskon(50);
$produk2->setDiskon(40);
$produk3->setDiskon(30);
$produk4->setDiskon(50);


//cara mencetak produk yang sudah di looping
$cetakproduk = new cetakInfoProduk;
$cetakproduk->tambahProduk($produk1);
$cetakproduk->tambahProduk($produk2);
$cetakproduk->tambahProduk($produk3);
$cetakproduk->tambahProduk($produk4);
echo $cetakproduk->cetak();

?>