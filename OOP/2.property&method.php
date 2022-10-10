<?php  

class produk {
		//property
		public 	$judul = "judul",
			 	$penerbit = "penerbit",
			 	$penulis = "penulis",
			 	$tanggalRilis = "tanggalRilis",
			 	$harga = "harga";

		//Method
		public function komik(){
			return 	"$this->judul, 
					$this->penulis,
					$this->penerbit,
					$this->tanggalRilis,
					$this->harga";	
		}	
}

//Object yang dibuat berdasarkan instance
$produk1 = new produk();
$produk1->judul = 'Naruto';
$produk1->penerbit = 'Shueisha';
$produk1->penulis = 'Masashi kishimoto';
$produk1->tanggalRilis = '2006';
$produk1->harga = 'Rp.30000';

$produk2 = new produk();
$produk2->judul = 'shingeki no Kyojin';
$produk2->penerbit = 'Kondansha';
$produk2->penulis = 'Isayama Hajime';
$produk2->tanggalRilis = '2009';
$produk2->harga = 'Rp.50000';

$produk3 = new produk();
$produk3->judul = 'One Punch Man';
$produk3->penerbit = 'Shueisha';
$produk3->penulis = 'Yuusuke Murata';
$produk3->tanggalRilis = '2009';
$produk3->harga = 'Rp.35000';

$produk4 = new produk();
$produk4->judul = "Bleach";
$produk4->penulis = "Tito kubo";
$produk4->penerbit = "Kondansha";
$produk4->tanggalRilis = "2006";
$produk4->harga = "20000";

echo "Manga 1 : " . $produk1->komik();
echo "<hr>";
echo "Manga 2 : " . $produk2->komik();
echo "<hr>";
echo "Manga 3 : " . $produk3->komik();
echo "<hr>";
echo "Manga 4 : " . $produk4->komik();
?>









