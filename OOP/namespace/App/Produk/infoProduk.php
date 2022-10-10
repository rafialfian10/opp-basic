<?php  
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

interface infoProduk {
	public function getInfoProduk();
}
?>