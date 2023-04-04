<?php 

class Produk {
    public  $judul,
            $penulis,
            $penerbit,
            $harga;

    public function __construct($judul= "judul",$penulis= "penulis",$penerbit = "penerbit",$harga = 0) {
        $this-> judul = $judul;
        $this-> penulis = $penulis;
        $this ->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel() {
        return "$this->judul , $this->penulis";
    }
}

$produk1 = new Produk("Naruto","Masashi Kishimoto","Shonen Jump",30000);
$produk2 = new Produk("Uncharted","Neil Druckman","Sony Computer",250000);
$produk4 = new Produk("Stardew Valley","Goku","Steam",70000);
$produk3 = new Produk("One Piece","Luffy","erlangga",30000);

echo $produk1 -> getLabel() ."<br>"; 
echo $produk2 -> getLabel() ."<br>";
echo $produk3 -> getLabel() ."<br>";
echo $produk4 -> getLabel() ."<br>";




?>