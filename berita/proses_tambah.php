<?php

$judul = $_POST['judul'];
$id_kategori = $_POST['id_kategori'];
$tanggal = $_POST['tanggal'];
$isi = $_POST['isi'];

$gambar = $_FILES['gambar']['name'];
$namafile = uniqid() . $gambar;
$namaSementara = $_FILES['gambar']['tmp_name'];

$terupload = move_uploaded_file($namaSementara, 'img/' . $namafile);

$query = mysqli_query($koneksi, "INSERT INTO tb_berita (judul, tanggal, isi, gambar, id_kategori) 
	VALUES ('$judul', '$tanggal', '$isi', '$namafile', '$id_kategori')");

if($query) {
	echo "<script>alert('Data Berhasil Ditambahkan');window.location.href='?page=berita/index';</script>";
} else {
	echo "<script>alert('Data Gagal Ditambahkan');window.location.href='?page=berita/tambah';</script>";
}