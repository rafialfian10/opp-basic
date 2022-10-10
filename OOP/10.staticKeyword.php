<?php  
	// static berfungsi agar kita bisa mengakses property dan method dalam konteks class atau bisa diakses tanpa instance dari class terlebih dahulu.
	class contohStatic{

		public static $angka = 1;

		public static function hello(){
			return "Hello World";
		}
	}

echo contohStatic::$angka; // bisa diakses tanpa instance dari class terleih dahulu
echo "<br>";
echo contohStatic::hello();
echo "<hr>";

?>

<?php  
	// static berfungsi agar kita bisa mengakses property dan method dalam konteks class atau bisa diakses tanpa instance dari class terlebih dahulu.
	class contohStatic2{

		public static $angka = 1;

		public static function hello(){
			return "Hello World " . self::$angka++ . " kali." ; //jika pakai objek biasa maka biasanya memakai $this->angka dan $this-> hanya berlaku untuk objek yang akan di instansiasi, karena kali ini tidak mamakai instansiasi maka gunakan self::. 
		}
	}

echo "Cara memanggil static tanpa instance";
echo "<br>";
echo contohStatic2::$angka; // bisa diakses tanpa instance dari class terleih dahulu
echo "<br>";
echo contohStatic2::hello();
echo "<br>";
echo contohStatic2::hello();
echo "<br>";
echo contohStatic2::hello();
echo "<hr>";

?>


<?php  
	// static berfungsi agar kita bisa mengakses property dan method dalam konteks class atau bisa diakses tanpa instance dari class terlebih dahulu.
	class contohStatic3{

		public $angka = 1;

		public function hello(){
			return "Hello World " . $this->angka++ . " kali." ; //jika pakai objek biasa maka biasanya memakai $this->angka dan $this-> hanya berlaku untuk objek yang akan di instansiasi, karena kali ini tidak mamakai instansiasi maka gunakan self::. 
		}
	}

echo "Perbedaan cara memanggil static dan objek yang telah di instance";
echo "<br>";
echo "Cara dengan instance objek dari class dengan cara biasa";
echo "<br>";
$objek1 = new contohStatic3;
echo $objek1->hello();
echo "<br>";
echo $objek1->hello();
echo "<br>";
echo $objek1->hello();
echo "<br>";
echo $objek1->hello();
echo "<br>";
echo $objek1->hello();
echo "<br><br>";

echo "Ketika dibuat objek baru dari instance class, maka nilai akan direset ulang";
echo "<br>";
$objek2 = new contohStatic3;
echo $objek2->hello();
echo "<br>";
echo $objek2->hello();
echo "<br>";
echo $objek2->hello();
echo "<br>";
echo $objek2->hello();
echo "<br>";
echo $objek2->hello();
echo "<hr>";

//-------------------------------------------------------------------------------------------------------------------------------------------------

class contohStatic4{

		public static $angka = 1;

		public function hello(){
			return "Hello World " . self::$angka++ . " kali." ; //jika pakai objek biasa maka biasanya memakai $this->angka dan $this-> hanya berlaku untuk objek yang akan di instansiasi, karena kali ini tidak mamakai instansiasi maka gunakan self::. 
		}
	}

echo "Perbedaan cara memanggil static dan objek yang telah di instance";
echo "<br>";
echo "Cara dengan instance objek pada static class, karena function Hello() bukan static maka dapat dibuat objek dulu";
echo "<br>";
$objek1 = new contohStatic4;
echo $objek1->hello();
echo "<br>";
echo $objek1->hello();
echo "<br>";
echo $objek1->hello();
echo "<br>";
echo $objek1->hello();
echo "<br>";
echo $objek1->hello();
echo "<br><br>";

echo "Ketika dibuat objek baru dari instance class, maka nilai terus berlanjut dan tidak direset ulang";
echo "<br>";
$objek2 = new contohStatic4;
echo $objek2->hello();
echo "<br>";
echo $objek2->hello();
echo "<br>";
echo $objek2->hello();
echo "<br>";
echo $objek2->hello();
echo "<br>";
echo $objek2->hello();
echo "<hr>";
?>