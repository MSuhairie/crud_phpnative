<?php

$nama_kategori = $_POST['nama_kategori'];

$query = mysqli_query($koneksi, "INSERT INTO tb_kategori (nama_kategori) 
	VALUES ('$nama_kategori')");

if($query) {
	echo "<script>alert('Data Berhasil Ditambahkan');window.location.href='?page=kategori/index';</script>";
} else {
	echo "<script>alert('Data Gagal Ditambahkan');window.location.href='?page=kategori/tambah';</script>";
}