<div class="container mt-4">
<div class="d-flex justify-content-end">
<a href="?page=kategori/tambah" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Kategori</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php 
      $no = 1;
      $kategori = mysqli_query($koneksi, "SELECT * FROM tb_kategori");
      while($data = mysqli_fetch_array($kategori)) {
    ?>
    <tr>
      <td><?= $no++ ?></td>
      <td><?= $data['nama_kategori'] ?></td>
      <td>
        <a href="?page=kategori/ubah&id_kategori=<?= $data['id_kategori'] ?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
        <a href="?page=kategori/hapus&id_kategori=<?= $data['id_kategori'] ?>" class="btn btn-danger" onclick="confirm('Anda Yakin Hapus ?')"><i class="fa fa-trash"></i></a>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
</div>