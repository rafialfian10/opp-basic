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

class cetakInfoProduk {  // class ini digunakan hanya untuk mencetak objek yang telah dibuat

	public function cetak( produk $produk) { //fungsi ini akan mengembalikan nilai string. parameternya objek produk yaag sudah dibuat dibawah. agar supaya fungsi cetak ini hanya menerima spesifik class produk/hanya class produk yang hanya boleh masuk/dicetak, maka parameternya ditambahkan produk dari class produk. Jadi fungsi cetak hanya menerima parameter yang jenisnya class produk. 
		$str =  "{$produk->judul} | {$produk->label()} | (Rp. {$produk->harga})";
		return $str;
	}
}

//Object yang dibuat berdasarkan instance
$produk1 = new produk("Naruto", "Masashi Kishimoto", "Shueisha", "2006", 30000);       
$produk2 = new produk("Shingeki no Kyojin", "Isayama Hajime", "Kondansha", "2009", 50000);
$produk3 = new produk("One Punch Man", "Shueisha", "Yuusuke Murata", "2009", 35000);
$produk4 = new produk("Bleach", "Tite Kubo", "Kondansha", "2006", 20000);


// echo "Manga 1 : " . $produk1->label();
// echo "<hr>";
// echo "Manga 2 : " . $produk2->label();
// echo "<hr>";
// echo "Manga 3 : " . $produk3->label();
// echo "<hr>";
// echo "manga 4 : " . $produk4->label();
// echo "<hr>";

//Cara menjalankan fungsi cetak. contoh mencetak produk dari produk 1
$infoProduk1 = new cetakInfoProduk();//buat variabel baru dengan instance class cetakInfoProduk()
echo $infoProduk1->cetak($produk1);//tentukan produk yang mana yang mau dicetak, tapi objek hanya bisa diambil dari class produk.
echo "<hr>";
$infoProduk2 = new cetakInfoProduk();
echo $infoProduk2->cetak($produk2);
echo "<hr>";
$infoProduk3 = new cetakInfoProduk();
echo $infoProduk3->cetak($produk3);
echo "<hr>";
$infoProduk4 = new cetakInfoProduk();
echo $infoProduk4->cetak($produk4);
?>