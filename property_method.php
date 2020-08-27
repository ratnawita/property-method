<?php
class produk{
	public $namaBarang = "shampoo";
	public $merk = "dove";
	public $harga = "32000";

	/*public function sayHello(){
		return "Hello RPL !";
	}
		*/

	public function getCetak(){
		return "$this->namaBarang, $this->merk, $this->harga";
	}	
}

/*$produk1 = new produk();
$produk1-> namaBarang = "sabun";
var_dump($produk1);*/



$produk2 = new produk();
echo "Nama Barang 1: " . $produk2->getCetak();

echo "<br>";

$produk3 = new produk();
$produk3->namaBarang="pasta gigi";
$produk3->merk="pepsodent";
$produk3->harga="12000";
echo "Nama Barang 2: " . $produk3-> getCetak();
 
?>