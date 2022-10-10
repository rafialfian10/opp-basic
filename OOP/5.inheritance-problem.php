<?php  

class produk {
		//property
		public 	$judul,
			 	$penulis,
			 	$penerbit,
			 	$tanggalRilis,
			 	$harga,
			 	$jmlHalaman,
			 	$waktuMain,
			 	$tipe;

		//Magic Method, nilai deffaultnya dapat dipindah di constructor
		public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $tanggalRilis = "Tanggal Rilis", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe){
			$this->judul = $judul;
			$this->penulis = $penulis;
			$this->penerbit = $penerbit;
			$this->tanggalRilis = $tanggalRilis;
			$this->harga = $harga;
			$this->jmlHalaman = $jmlHalaman;
			$this->waktuMain = $waktuMain;
			$this->tipe = $tipe;
		}	 	

		//Method
		public function label(){
			return 	"$this->penulis,
					 $this->penerbit,
					 $this->tanggalRilis";	
		}	


		public function getInfoProduk(){
			$str = "{$this->judul} | {$this->label()}, (Rp. {$this->harga}), ";
			if($this->tipe == "Manga"){
				$str .= " - {$this->jmlHalaman} halaman.";
			} else if ($this->tipe == "Game"){
				$str .= " ~ {$this->waktuMain} jam.";
			}

			return $str;		
		}
}

class cetakInfoProduk {  // class ini digunakan hanya untuk mencetak objek yang telah dibuat

	public function cetak( produk $produk) { //fungsi ini akan mengembalikan nilai string. parameternya objek produk yaag sudah dibuat dibawah. agar supaya fungsi cetak ini hanya menerima spesifik class produk/hanya class produk yang hanya boleh masuk/dicetak, maka parameternya ditambahkan produk dari class produk. Jadi fungsi cetak hanya menerima parameter yang jenisnya class produk. 
		$str =  "{$produk->judul} | {$produk->label()} | (Rp. {$produk->harga})";
		return $str;
	}
}

//Object yang dibuat berdasarkan instance
$produk1 = new produk("Naruto", "Masashi Kishimoto", "Shueisha", "2006", 30000, 200, 0, "Manga");       
$produk2 = new produk("Shingeki no Kyojin", "Isayama Hajime", "Kondansha", "2009", 50000, 250, 0, "Manga");
$produk3 = new produk("Uncharted", "Neil Druckmann", "Naughty Dog", "2020", 400000, 0, 50, "Game");
$produk4 = new produk("Metal Gear Solid V", "Hideo Kojima", "Konami", "2019", 350000, 0, 70, "Game");


//Cara menampillkan getInfoProduk dari tiap instance
echo $produk1->getInfoProduk();
echo "<hr>";
echo $produk2->getInfoProduk();
echo "<hr>";
echo $produk3->getInfoProduk();
echo "<hr>";
echo $produk4->getInfoProduk();
echo "<hr>";
?>