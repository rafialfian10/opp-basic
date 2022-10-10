<?php  
//constant adalah sebuah identifier untuk menyimpan nilai
//persamaan variable dan constant adalah sama-sama untuk  menyimpan nilai.
//perbedaan variabel dan constant adalah nilai pada variabel dapat berubah sedangkan constant tidak dapat berubah ketika sudah di set didalam program.
//ada 2 cara membuat constant : define() dan const

define('NAMA', 'Rafi Alfian'); //biasakan membuat name paada constant dengan huruf besar semua.
echo NAMA;

echo "<br>";

const UMUR = 25;
echo UMUR;

echo "<br>";

const HOBI = 'Ngoding';
echo HOBI;

echo "<br>";

//define() tidak bisa dimasukan kedalam class sedangkan consst bisa dimasukkan ke dalam kelas.


// class Rafi{
// 	define('NAMA', 'Rafi Alfian');
// } // ini akan error

class Rafi{
	const NAMA = 'Rafi Alfian';
}  // cara mengaksesnya panggil class :: nama constant-nya.
echo Rafi::NAMA;
echo "<hr>";

//----------------------------------------------------------------------------------------------------------------------------------------------------

//Magic Constant : constant yang sudah disediakan PHP
/*	__LINE__
	__FILE__
	__DIR__
	__fUNCTION__
	__CLASS__
	__TRAIT__
	__METHOD__
	__NAMESPACE__
*/
echo __LINE__; //keyword ini menunjukkan kita sedang berada di baris/line berapa
echo "<hr>";
echo __FILE__;  //keyword ini menunjukkan alamat file yang bersangkutan.
echo "<hr>";

function fungsi(){
	return  __fUNCTION__; //keyword ini akan menunjukkan nama function
}
echo fungsi();
echo "<hr>";




function dirr(){
	return __DIR__; // keyword ini akan menunjukkan tempat directory penyimpanan file
}
echo dirr();
echo "<hr>";



class kelas{

	public $kelas = __CLASS__; // keyword ini menunjukkan nama class yan dibuat 
	} 
$objek1 = new kelas;
echo $objek1->kelas;
echo "<hr>";






class metode{

	function method(){
		return __METHOD__; //keyword ini menunjukkan nama method yang telah dibuat.
	} 
}
$objek2 = new metode;
echo $objek2->method();
echo "<hr>";


?>