<?php  

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
		$str = $this->judul | {$this->getLabel()},  "(Rp. {$this->harga}),00";
		return $str;
	}

	public function getInfoProduk(){
		// $str = " Manga : " . parent::getInfo() . " - {$this->jmlHalaman} halaman." ; // jadi  tidak perlu memakai parent:: karena nama getInfoProduk diganti getInfo()
		$str = "Manga : " . $this->getInfo() . " - {$this->jmlHalaman} halaman. ";
		return $str;
	}
}

?>