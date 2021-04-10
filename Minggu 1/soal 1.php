<?php

class buku{
	public $judulbuku;
	public $pengarang;
	public $penerbit;
	public $tahunterbit;
	public $cetakan;
}
$buku1= new buku();
$buku1->judulbuku="Hilang";
$buku1->pengarang="Nawang";
$buku1->penerbit="MediaKita";
$buku1->tahunterbit="2020";
$buku1->cetakan="500lembar";

echo $buku->judulbuku;
?>