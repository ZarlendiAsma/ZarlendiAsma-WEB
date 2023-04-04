<?php


class Produk {
    public  $judul,
            $penulis,
            $penerbit,
            $harga;
    
    public function getLabel()
    {
        return "$this->judul, $this->penulis";
    }
}

$produk1 = new Produk();
$produk1->judul = "Naruto";
$produk1->penulis = "Masashi Kisimoto";


$produk2 = new Produk();
$produk2->judul  = "Uncharterd";
$produk2->penulis = "Noll";

echo $produk1 -> getLabel();
echo "<br>";
echo $produk2 -> getLabel();





?>