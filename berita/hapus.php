<?php

$id_berita = $_GET['id_berita'];

$query = mysqli_query($koneksi, "DELETE FROM tb_berita WHERE id_berita='$id_berita'");

if($query) {
	echo "<script>alert('Data Berhasil Dihapus');window.location.href='?page=berita/index';</script>";
} else {
	echo "<script>alert('Data Gagal Dihapus');window.location.href='?page=berita/index';</script>";
}