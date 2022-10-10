<?php  
	class produk {

		public  $judul,
				$penulis,
				$penerbit,
				$tanggalRilis,
				$harga;
				
		public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $tanggalRilis = "tanggalRilis", $harga = 0,){
			$this->judul = $judul;
			$this->penulis = $penulis;
			$this->penerbit = $penerbit;
			$this->tanggalRilis = $tanggalRilis;
			$this->harga = $harga;
		}

		public function label(){
			return" $this->penulis,
					$this->penerbit,
					$this->tanggalRilis";
		}

		public function getInfoProduk(){
			$str = "{$this->judul} | {$this->label()}, (Rp. {$this->harga}), ";
			return $str;
		}
	}

// -----------------------------------------------------------------------------------------------------------------------------------------------

//Inheritance (memanggil kelas produk didalam kelas baru)
	class manga extends produk {
		public $jmlHalaman;// berikan property spesial yang menandakan manga yaitu jumlah halaman. jadi  $jmlHalaman pada class produk dihapus.	

		public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $tanggalRilis = "tanggalRilis", $harga = 0, $jmlHalaman = 0){//buat __construct untuk mengisi variabel $jmlHalaman.
			//dari pada ditulis manual satu-satu seperti pada public function __construct, lebih baik panggil dengan parent::__construct, tapi $jmlHalaman dipisah karena pada sudah terdapat property $jmlHalaman pada class manga ini.
				parent::__construct($judul, $penulis, $penerbit, $tanggalRilis, $harga);//defaultnya dikosongkan agar tidak ketimpa

				$this->jmlHalaman = $jmlHalaman;
			} 

		public function getInfoProduk(){
			$str = "Manga : " . parent::getInfoProduk() . " - {$this->jmlHalaman} halaman. ";//panggil getInfoProduk() yang berada didalam class produk,bukan yang didalam method ini, karena namanya sama, maka gunakan OVERRIDDING yaitu parent::getInfoProduk().
			return $str;
		}
	}

	class game extends produk {
		public $waktuMain;

		public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $tanggalRilis = "tanggalRilis", $harga = 0, $waktuMain = 0){

			parent::__construct($judul, $penulis, $penerbit, $tanggalRilis, $harga);

			$this->waktuMain = $waktuMain;
		}

		public function getInfoProduk(){
			$str = "Game : " . parent::getInfoProduk() . " ~ {$this->waktuMain} jam. ";
			return $str;
		}
	}

//buat instance
$produk1 = new manga("Naruto", "Masashi Kishimoto", "Shueisha", "2006", 30000, 220);       
$produk2 = new manga("Shingeki no Kyojin", "Isayama Hajime", "Kondansha", "2009", 50000, 300);
$produk3 = new game("Uncharted", "Neil Druckmann", "Naughty Dog", "2020", 400000, 50);
$produk4 = new game("Metal Gear Solid V", "Hideo Kojima", "Konami", "2019", 350000, 70);//parameter cukup 1 saja, karena sudah ada method yang spesifik yang menandakan tipe produk

//Panggil tiap produk dengan mengunakan method getInfoProduk()
echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<br>";
echo $produk3->getInfoProduk();
echo "<br>";
echo $produk4->getInfoProduk();
echo "<br>";




?>