<?php
include "koneksi.php";
$id_buku = $_POST["id_buku"];
$Kategori = $_POST["kategori"];
$nama_buku = $_POST["nama_buku"];
$Harga = $_POST["harga"];
$stok = $_POST["stok"];
$penerbit = $_POST["penerbit"];
$sql = "INSERT INTO tb_buku (id_buku, Kategori, nama_buku, Harga, Stok, Penerbit)
VALUES('$id_buku','$Kategori','$nama_buku','$Harga','$stok','$penerbit')";
$query = mysqli_query($koneksi, $sql);
header("location:index.php");