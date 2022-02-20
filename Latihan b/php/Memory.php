<?php
// deklarasi kelas memory inherit hardware
class Memory extends Hardware{
	//variabel lokal
	private $frequency;
	private $memorysize;
	private $supportscuda;
	//konstruktor
	public function __construct(){
		$this->frequency = 0;
        $this->memorysize = 0;
        $this->supportscuda = 0;
	}
	/*
	public function __construct($frequency = 0, $memorysize = 0, $supportscuda = 0){
		$this->frequency = $frequency;
		$this->memorysize = $memorysize;
		$this->supportscuda = $supportscuda;
	}
	*/
	//get dan set setiap variabel
	public function setfrequency($frequency){
		$this->frequency = $frequency;
	}
	public function getfrequency(){
		return $this->frequency;
	}
	public function setmemorysize($memorysize){
		$this->memorysize = $memorysize;
	}
	public function getmemorysize(){
		return $this->memorysize;
	}
	public function setsupportscuda($supportscuda){
		$this->supportscuda = $supportscuda;
	}
	public function getsupportscuda(){
		return $this->supportscuda;
	}
	public function __destruct(){
	}
}
?>