<?php  
      $id_kategori = $_GET['id_kategori'];
      $kategori = mysqli_query($koneksi, "SELECT * FROM tb_kategori WHERE id_kategori='$id_kategori'");
      $data = mysqli_fetch_array($kategori);
?>

<div class="container mt-4">
<form action="?page=kategori/proses_ubah" method="post" enctype="multipart/form-data">
<input type="hidden" name="id_kategori" value="<?= $data['id_kategori'] ?>">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nama Kategori</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Massukan Nama Kategori" name="nama_kategori" value="<?= $data['nama_kategori'] ?>">
</div>
<div class="d-flex justify-content-star">
<a href="?page=kategori/index" class="btn btn-danger">Kembali</a>
<button type="submit" class="btn btn-success ms-2">Simpan</button>
</div>
</form>
</div>
