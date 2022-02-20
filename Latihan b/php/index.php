<?php
	// include class atau file
	include "product.php";
	include "hardware.php";
	include "memory.php";
	//deklarasi variabel berisi kelas memori baru
	$item = new memory();
	//isi setiap variabel
	$item->setidproduct("15");
	$item->setprice(1600000);
	$item->setbrand("MSI");
	$item->setmodel("N750Ti");
	$item->setfrequency(5400);
	$item->setmemorysize(2048);
	$item->setsupportscuda(640);
	//tampilkan
	echo "ID Product    : ". $item->getidproduct() ."<br>";
	echo "Price         : ". $item->getprice() ."<br>";
	echo "Brand         : ". $item->getbrand() ."<br>";
	echo "Model         : ". $item->getmodel() ."<br>";
	echo "Frequency     : ". $item->getfrequency() ."<br>";
	echo "Memory Size   : ". $item->getmemorysize() ."<br>";
	echo "Supports Cuda : ". $item->getsupportscuda() ."<br>";
?>