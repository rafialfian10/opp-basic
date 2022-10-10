<?php  

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



?>