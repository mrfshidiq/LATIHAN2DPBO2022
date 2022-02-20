<?php
// deklarasi kelas hardware inherit produk
class Hardware extends Product{
	//variabel lokal
	private $brand;
	private $model;
	//konstruktor
	public function __construct(){
		$this->brand = "";
        $this->model = "";
	}
	/*
	public function __construct($brand = "", $model = ""){
		$this->brand = $brand;
		$this->model = $model;
	}
	*/
	//get dan set setiap variabel
	public function setbrand($brand){
		$this->brand = $brand;
	}
	public function getbrand(){
		return $this->brand;
	}
	public function setmodel($model){
		$this->model = $model;
	}
	public function getmodel(){
		return $this->model;
	}
	public function __destruct(){
	}
}
?>