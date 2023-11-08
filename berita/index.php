<div class="container mt-4">
<div class="d-flex justify-content-end">
<a href="?page=berita/tambah" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Kategori</th>
      <th scope="col">Judul</th>
      <th scope="col">Tanggal</th>
      <th scope="col">isi</th>
      <th scope="col">Gambar</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php 
      $no = 1;
      $berita = mysqli_query($koneksi, "SELECT * FROM tb_berita b join tb_kategori k on b.id_kategori = k.id_kategori");
      while($data = mysqli_fetch_array($berita)) {
    ?>
    <tr>
      <td><?= $no++ ?></td>
      <td><?= $data['nama_kategori'] ?></td>
      <td><?= $data['judul'] ?></td>
      <td><?= $data['tanggal'] ?></td>
      <td><?= $data['isi'] ?></td>
      <td><img src="img/<?= $data['gambar'] ?>" width="100px"></td>
      <td>
        <a href="?page=berita/ubah&id_berita=<?= $data['id_berita'] ?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
        <a href="?page=berita/hapus&id_berita=<?= $data['id_berita'] ?>" class="btn btn-danger" onclick="confirm('Anda Yakin Hapus ?')"><i class="fa fa-trash"></i></a>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
</div>