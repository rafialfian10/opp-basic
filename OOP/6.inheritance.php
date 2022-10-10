<?php  
	class produk {

		public  $judul,
				$penulis,
				$penerbit,
				$tanggalRilis,
				$harga,
				$jmlHalaman,
				$waktuMain;
				

		public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $tanggalRilis = "tanggalRilis", $harga = 0, $jmlHalaman = 0, $waktuMain = 0 ){
			$this->judul = $judul;
			$this->penulis = $penulis;
			$this->penerbit = $penerbit;
			$this->tanggalRilis = $tanggalRilis;
			$this->harga = $harga;
			$this->jmlHalaman = $jmlHalaman;
			$this->waktuMain = $waktuMain;
			
		}


		public function getInfoProduk(){
			$str = "{$this->judul} | {$this->label()}, (Rp. {$this->harga}), ";
			return $str;
		}

		
		public function label(){
			return" $this->penulis,
					$this->penerbit,
					$this->tanggalRilis";
		}
	}






//Inheritance (memanggil kelas produk didalam kelas baru)
	class manga extends produk {
		public function getInfoProduk(){
			$str = "Manga : {$this->judul} | {$this->label()}, (Rp. {$this->harga}), - {$this->jmlHalaman} halaman. ";
			return $str;
		}
	}

	class game extends produk {
		public function getInfoProduk(){
			$str = "Game : {$this->judul} | {$this->label()}, (Rp. {$this->harga}), ~ {$this->waktuMain} jam. ";
			return $str;
		}
	}

$produk1 = new manga("Naruto", "Masashi Kishimoto", "Shueisha", "2006", 30000, 220, 0);       
$produk2 = new manga("Shingeki no Kyojin", "Isayama Hajime", "Kondansha", "2009", 50000, 300, 0);
$produk3 = new game("Uncharted", "Neil Druckmann", "Naughty Dog", "2020", 400000, 0, 50,);
$produk4 = new game("Metal Gear Solid V", "Hideo Kojima", "Konami", "2019", 350000, 0, 70,);


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<br>";
echo $produk3->getInfoProduk();
echo "<br>";
echo $produk4->getInfoProduk();
echo "<br>";




?>