<?php

$id_kategori = $_GET['id_kategori'];

$query = mysqli_query($koneksi, "DELETE FROM tb_kategori WHERE id_kategori='$id_kategori'");

if($query) {
	echo "<script>alert('Data Berhasil Dihapus');window.location.href='?page=kategori/index';</script>";
} else {
	echo "<script>alert('Data Gagal Dihapus');window.location.href='?page=kategori/index';</script>";
}