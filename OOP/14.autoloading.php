<?php  
//autoloading adalah proses pemanggilan class tanpa harus menggunakan fungsi require. biasanya ketika membuat OOP itu 1 class ditulis didalam 1 file. tujuannya adalah untuk memudahkan pengerjaan terutama pada kerja sama tim saat membuat project besar.



/* Innterface(1)
	kelas abstrak yang sama sekali tidak memiliki implementasi
	Murni merupakan template untuk kelas turunannya 
	Tidak boleh memilki property, hanya deklarasi meodnya saja*
	semua method harus dideklarasikan dengan visibility public 
	boleh mendeklarasikan __construct
	turunannya boleh mengimpementasikan lebih dari satu interface. contoh: class game implements adventure, action

   Interface(2)
	Dengan menggunakan type-hinting dapat melakukan 'Dependency Injection'
	Pada akhirnya akan mencapai polymorphism*/

interface infoProduk{
	public function getInfoProduk();

}


/*	abstract class adalah sebuah kelas yang tidak dapat di instansiasi.
	mendefiniskan interface untuk kelas lain yang menjadi turunannya.
	berperan sebagai kerangka dasar untuk turunannya.
	memiliki minimal 1 method abstract.
	digunakan dalam pewarisan/inheritance untuk memaksakan implementasi method abstract yang sama untuk semua kelas turunannya.*/

/*method abstract, hanya dibuat interface-nya saja, atau tanpaa isi. lalu implementasi-nya ada dikelas turunannya. contoh : abstract public function makan();*/
/*	semua kelas turunan, harus mengimlementasikan method abstrak yangh ada dikelas abstrak-nya.
	kelas abstrak boleh memiliki property / method reguler.
	kelas abstrak boleh memiliki property / static method.*/

/*alasan kenapa harus ada kelas abstract
	merepresentasikan ide atau konsep dasar.
	composition over inheritance.
	salah satu cara menerapkan polimorphism.
	sentralisasi logic.
	mempermudah pengerjaan tim.*/



abstract class produk{ //pemberian abstract berarti class produk sudah kita pastikan tidak akan pernah di instance. pemberian bastract tergantung keputusan.

	protected $judul, 
			  $penulis,
			  $penerbit,
			  $tanggalRilis,
			  $harga, // yang punya akses property $harga ini hanya class produk saja dan tidak bisa diinheritance.
			  $diskon; // yang punya akses property $diskon ini hanya class produk dan turunannya (childnya).
	

	public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $tanggalRilis = "0-0-0", $harga = 0) {

		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->tanggalRilis = $tanggalRilis;
		$this->harga = $harga;
	}

	public function setjudul ($judul){ //setter. tujuan pemberian setter&getter adalah untuk memberikan function. seperti contoh dibawah
		if(!is_string($judul)){ // jika $judul bukan string maka tampilkan pesan error
			throw new Exception("Judul harus string slur!");
		} $this->judul = $judul;
	}

	public function getjudul(){ //getter
		return $this->judul;
	}

	public function setPenulis ($penulis){
		$this->penulis = $penulis;
	}

	public function getPenulis(){
		return $this->penulis;
	}

	public function setPenerbit ($penerbit){
		$this->penerbit = $penerbit;
	}

	public function getPenerbit(){
		return $this->penerbit;
	}

	public function setTanggalRilis ($tanggalRilis){
		$this->tanggalRilis = $tanggalRilis;
	}

	public function getTanggalRilis(){
		return $this->tanggalRilis;
	}

	public function setHarga($harga){
		return $this->harga =$harga;
	}

	public function getHarga(){
		return "Diskon {$this->diskon}% : " . " Rp." . $this->harga - ($this->diskon / 100 * $this->harga);
	}

	public function getLabel(){
		return "$this->penulis, $this->penerbit, $this->tanggalRilis ";
	}

	abstract public function getInfo();
}

//-------------------------

class manga extends produk implements infoProduk{

	public $jmlHalaman;

	public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $tanggalRilis = "0-0-0", $harga = 0, $jmlHalaman = 0){

		parent::__construct($judul, $penulis, $penerbit, $tanggalRilis, $harga);

		$this->jmlHalaman = $jmlHalaman;
	}

	public function setDiskon($diskon){
		$this->diskon = $diskon;
	}

	public function getInfo(){
		$str = "{$this->judul} | {$this->getLabel()}, (Rp. {$this->harga}), ";
		return $str;
	}

	public function getInfoProduk(){
		// $str = " Manga : " . parent::getInfo() . " - {$this->jmlHalaman} halaman." ; // jadi  tidak perlu memakai parent:: karena nama getInfoProduk diganti getInfo()
		$str = "Manga : " . $this->getInfo() . " - {$this->jmlHalaman} halaman. ";
		return $str;
	}
}

//----------------

class game extends produk implements infoProduk{

	public $waktuMain;

	public function __construct($judul = "Judul", $penulis = "Penulis", $penerbit = "Penerbit", $tanggalRilis = "0-0-0", $harga = 0, $waktuMain = 0){

		parent::__construct($judul, $penulis, $penerbit, $tanggalRilis, $harga);

		$this->waktuMain = $waktuMain;
	}

	public function setDiskon($diskon){
		$this->diskon = $diskon;
	}

	public function getInfo(){
		$str = "{$this->judul} | {$this->getLabel()}, (Rp. {$this->harga}), ";
		return $str;
	}

	public function getInfoProduk(){
		$str = " Game : " . $this->getInfo() . " ~ {$this->waktuMain} jam." ;
		return $str;
	}
}


class cetakInfoProduk{
	public $daftarProduk = [];
	public $i = 1;

	public function tambahProduk(produk $produk){
		$this->daftarProduk[] = $produk; 
	}

	public function cetak(){

		$str = "DAFTAR PRODUK : <br>";

		foreach ($this->daftarProduk as $p){
			$str .= $this->i++ . ". "  .  " {$p->getInfoProduk()} <br>" . "{$p->getHarga()} <br><br>";
		} 
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

// $produk1->setjudul(8534); //ini akan error karena bukan tipe string
// echo $produk1->getjudul();

//cara mencetak produk yang sudah di looping
$cetakproduk = new cetakInfoProduk;
$cetakproduk->tambahProduk($produk1);
$cetakproduk->tambahProduk($produk2);
$cetakproduk->tambahProduk($produk3);
$cetakproduk->tambahProduk($produk4);
echo $cetakproduk->cetak();
     



?>



