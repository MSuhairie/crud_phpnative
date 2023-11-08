<?php

$id_berita = $_POST['id_berita'];
$id_kategori = $_POST['id_kategori'];
$judul = $_POST['judul'];
$tanggal = $_POST['tanggal'];
$isi = $_POST['isi'];

if ($_FILES['gambar']['name'] == ''){
	$namafile = $_POST['foto_lama'];
} else {
	$gambar = $_FILES['gambar']['name'];
	$namafile = uniqid() . $gambar;
	$namaSementara = $_FILES['gambar']['tmp_name'];

	unlink('img/' . $_POST['foto_lama']);
	$terupload = move_uploaded_file($namaSementara, 'img/' . $namafile);
}

$query = mysqli_query($koneksi, "UPDATE tb_berita SET judul='$judul', tanggal='$tanggal', isi='$isi', gambar='$namafile', id_kategori='$id_kategori' WHERE id_berita='$id_berita'");

if($query) {
	echo "<script>alert('Data Berhasil Diubah');window.location.href='?page=berita/index';</script>";
} else {
	echo "<script>alert('Data Gagal Diubah');window.location.href='?page=berita/ubah';</script>";
}