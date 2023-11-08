<?php  
      $id_berita = $_GET['id_berita'];
      $kategori = mysqli_query($koneksi, "SELECT * FROM tb_berita WHERE id_berita='$id_berita'");
      $data = mysqli_fetch_array($kategori);
?>

<div class="container mt-4">
<form action="?page=berita/proses_ubah" method="post" enctype="multipart/form-data">
<input type="hidden" name="id_berita" value="<?= $data['id_berita'] ?>">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nama Kategori</label>
  <select name="id_kategori" class="form-control">
    <option selected>-Pilih Kategori-</option>
    <?php  
          $query = mysqli_query($koneksi, "SELECT * FROM tb_kategori");
          while ($data2 = mysqli_fetch_array($query)){
    ?>
    <option value="<?= $data2['id_kategori'] ?>" <?= $data2['id_kategori'] == $data['id_kategori'] ? 'selected' : '' ?>>
    <?= $data2['nama_kategori'] ?>
    </option>
    <?php } ?>
  </select>
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Judul</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Massukan Judul" name="judul" value="<?= $data['judul'] ?>">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Tanggal</label>
  <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="Massukan Judul" name="tanggal" value="<?= $data['tanggal'] ?>">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Isi</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="isi"><?= $data['isi'] ?></textarea>
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Gambar</label>
  <input type="hidden" class="form-control" id="foto_lama" name="foto_lama" value="<?php echo $data['gambar'] ?>">
  <input type="file" class="form-control" id="gambar" name="gambar">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Gambar Lama</label><br>
  <img src="img/<?php echo $data['gambar'] ?>" width="150px" height="120px" />
</div>
<div class="d-flex justify-content-star">
<a href="?page=berita/index" class="btn btn-danger">Kembali</a>
<button type="submit" class="btn btn-success ms-2">Simpan</button>
</div>
</form>
</div>