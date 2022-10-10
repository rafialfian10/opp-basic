<?php  

class produk{

	public  $judul, 
			$penulis,
			$penerbit,
			$tanggalRilis;
	//Visibility(Access Modifier)
	private $harga; // yang punya akses property $harga ini hanya class produk saja dan tidak bisa diinheritance.
	protected $diskon; // yang punya akses property $diskon ini hanya class produk dan turunannya (childnya).
	

	public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $tanggalRilis = "0-0-0", $harga = 0) {

		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->tanggalRilis = $tanggalRilis;
		$this->harga = $harga;
	}

	public function getLabel(){
		return "$this->penulis, $this->penerbit, $this->tanggalRilis ";
	}

	public function getInfoProduk(){
		$str = "{$this->judul} | {$this->getLabel()}, (Rp. {$this->harga}), ";
		return $str;
	}

	public function getHarga(){
		return "Diskon {$this->diskon}% : " . " Rp." . $this->harga - ($this->diskon / 100 * $this->harga);
	}
}

//-------------------------

class manga extends produk{

	public $jmlHalaman;

	public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $tanggalRilis = "0-0-0", $harga = 0, $jmlHalaman = 0){

		parent::__construct($judul, $penulis, $penerbit, $tanggalRilis, $harga);

		$this->jmlHalaman = $jmlHalaman;
	}

	public function setDiskon($diskon){
		$this->diskon = $diskon;
	}

	public function getInfoProduk(){
		$str = " Manga : " . parent::getInfoProduk() . " - {$this->jmlHalaman} halaman." ;
		return $str;
	}
}

//----------------

class game extends produk{

	public $waktuMain;

	public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $tanggalRilis = "0-0-0", $harga = 0, $waktuMain = 0){

		parent::__construct($judul, $penulis, $penerbit, $tanggalRilis, $harga);

		$this->waktuMain = $waktuMain;
	}

	public function setDiskon($diskon){
		$this->diskon = $diskon;
	}

	public function getInfoProduk(){
		$str = " Game : " . parent::getInfoProduk() . " ~ {$this->waktuMain} jam." ;
		return $str;
	}
}

$produk1 = new manga("Naruto", "Masashi Kishimoto", "Shueisha", "2006", 30000, 220);       
$produk2 = new manga("Shingeki no Kyojin", "Isayama Hajime", "Kondansha", "2009", 50000, 300);
$produk3 = new game("Uncharted", "Neil Druckmann", "Naughty Dog", "2020", 400000, 50);
$produk4 = new game("Metal Gear Solid V", "Hideo Kojima", "Konami", "2019", 350000, 70);


echo $produk1->getInfoProduk();
echo "<br>";
$produk1->setDiskon(50);
echo $produk1->getHarga();
echo "<hr>";

echo $produk2->getInfoProduk();
echo "<br>";
$produk2->setDiskon(40);
echo $produk2->getHarga();
echo "<hr>";

echo $produk3->getInfoProduk();
echo "<br>";
$produk3->setDiskon(30);
echo $produk3->getHarga();
echo "<hr>";

echo $produk4->getInfoProduk();
echo "<br>";
$produk4->setDiskon(50);
echo $produk4->getHarga();
echo "<hr>";
?>