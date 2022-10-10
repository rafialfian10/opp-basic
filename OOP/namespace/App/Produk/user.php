<?php namespace App\Produk; //jika terdapat namespace, pastikan diletaakkan pada baris pertama.

	class user{
		public function __construct(){
			echo "ini adalah class " . __CLASS__;
		}
	}
?>
<!-- NameSpace berfungsi agar apabila terdapat class yang sama pada suatu project, maka class tersebut dapat di instasiasi dengan keyword namespace. disini 	 kasusnya adalah terdapat class user yang sama pada folder produk dan folder service.
berikan namespace dimulai dari folder pertama App\Produk, karena class user berada pada folder produk. Usulan pembuatan naamespace-->
<!-- namespace Vendor\Namespace\SubNamespace -->
<!-- Vendor berarti nama pembuatnya/ aplikasinya-->