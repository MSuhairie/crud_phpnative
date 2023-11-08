<div class="container mt-4">
<form action="?page=berita/proses_tambah" method="post" enctype="multipart/form-data">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nama Kategori</label>
  <select name="id_kategori" class="form-control">
    <option selected>-Pilih Kategori-</option>
    <?php 
        $query = mysqli_query($koneksi, "SELECT * FROM tb_kategori");
        while($data = mysqli_fetch_array($query)){
    ?>
    <option value="<?= $data['id_kategori'] ?>"><?= $data['nama_kategori'] ?></option>
    <?php } ?>
  </select>
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Judul</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Massukan Judul" name="judul">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Tanggal</label>
  <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="Massukan Judul" name="tanggal">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Isi</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="isi"></textarea>
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Gambar</label>
  <input type="file" class="form-control" id="exampleFormControlInput1" name="gambar">
</div>
<div class="d-flex justify-content-star">
<a href="?page=berita/index" class="btn btn-danger">Kembali</a>
<button type="submit" class="btn btn-success ms-2">Simpan</button>
</div>
</form>
</div>