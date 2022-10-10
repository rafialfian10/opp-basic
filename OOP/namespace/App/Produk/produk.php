<?php  

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



?>