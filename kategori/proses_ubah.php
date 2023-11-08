<?php

$id_kategori = $_POST['id_kategori'];
$nama_kategori = $_POST['nama_kategori'];

$query = mysqli_query($koneksi, "UPDATE tb_kategori SET nama_kategori='$nama_kategori' WHERE id_kategori='$id_kategori'");

if($query) {
	echo "<script>alert('Data Berhasil Diubah');window.location.href='?page=kategori/index';</script>";
} else {
	echo "<script>alert('Data Gagal Diubah');window.location.href='?page=kategori/ubah';</script>";
}