<?php
// deklarasi kelas product
class Product{
	//variabel lokal
	private $price;
	private $idproduct;
	//konstruktor
	public function __construct(){
		$this->price = 0;
        $this->idproduct = "";
	}
	/*
	public function __construct($price = 0, $idproduct = ""){
		$this->price = $price;
		$this->idproduct = $idproduct;
	}
	*/
	//get dan set setiap variabel
	public function setprice($price){
		$this->price = $price;
	}
	public function getprice(){
		return $this->price;
	}
	public function setidproduct($idproduct){
		$this->idproduct = $idproduct;
	}
	public function getidproduct(){
		return $this->idproduct;
	}
	public function __destruct(){
	}
}
?>