<?php  

class produk {
		//property
		public 	$judul,
			 	$penulis,
			 	$penerbit,
			 	$tanggalRilis,
			 	$harga;

		//Magic Method, nilai deffaultnya dapat dipindah di constructor
		public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $tanggalRilis = "Tanggal Rilis", $harga = 0){
			$this->judul = $judul;
			$this->penulis = $penulis;
			$this->penerbit = $penerbit;
			$this->tanggalRilis = $tanggalRilis;
			$this->harga = $harga;
		}	 	

		//Method
		public function label(){
			return 	"$this->penulis,
					 $this->penerbit,
					 $this->tanggalRilis";	
		}	
}

//Object yang dibuat berdasarkan instance
$produk1 = new produk("Naruto", "Masashi kishimoto", "Shueisha", "2006", 30000);       
$produk2 = new produk("shingeki no Kyojin", "Isayama Hajime", "Kondansha", "2009", 50000);
$produk3 = new produk("One Punch Man", "Shueisha", "Yuusuke Murata", "2009", 35000);
$produk4 = new produk("Bleach", "Tite Kubo", "Kondansha", "2006", 20000);


echo "Manga 1 : " . $produk1->label();
echo "<hr>";
echo "Manga 2 : " . $produk2->label();
echo "<hr>";
echo "Manga 3 : " . $produk3->label();
echo "<hr>";
echo "manga 4 : " . $produk4->label();




?>