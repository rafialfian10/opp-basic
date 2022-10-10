<?php  

class cetakInfoProduk{
	public $daftarProduk = [];
	public $i = 1;

	public function tambahProduk(produk $produk){
		$this->daftarProduk[] = $produk;
	}
	public function cetak(){
		$str = "DAFTAR PRODUK : <br>";

		foreach($this->daftarProduk as $p){
			$str .= $this->i++ . ". " . "{$p->getInfoProduk()} <br>" . "{$p->getHarga()}<br><br>";
		}
		return $str;
	}
}

?>