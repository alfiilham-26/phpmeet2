<?php 

	class Pakaian {
		public $warna,
			   $ukuran,
			   $bahan,
			   $harga;

		public function getbuy(){
			return "$this->warna,$this->ukuran,
			        $this->bahan,$this->harga";
		}

		
	}

	$baju = new Pakaian();
	$baju->warna = "Hijau";
	$baju->ukuran = "XL";
	$baju->bahan = "Katun";
	$baju->harga = 75000;


	echo "Baju : ". $baju->getbuy();

?>