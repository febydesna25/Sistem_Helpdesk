<?php
include 'koneksi.php';
$query = mysqli_query($db, "SELECT * FROM item_masalah WHERE kode_item = '" . $_GET['kode_item'] . "'");
$data = mysqli_fetch_array($query);

?>
<form method="POST" action="aksi_edit.php">
<div class="container-fluid">
	<div class="row">
		<div class="col">
			<h2>Form Item Masalah</h2>
		</div>
	</div>
    <div class="form-group">
        <label>Kode Item</label>
        <input type="text" name="kode_item" value="<?= $data['kode_item'] ?>"
        class="form-control">
    </div>
    <div class="form-group">
        <label>Kode Kategori</label>
        <input type="text" name="kode_kategori" value="<?= $data['kode_kategori'] ?>"
        class="form-control">
    </div>
	<div class="form-group">
        <label>Keluhan</label>
        <input type="text" name="permasalahan" value="<?= $data['permasalahan'] ?>"
        class="form-control">
    </div>
    <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" value="<?= $data['nama'] ?>"
        class="form-control">
    </div>
    <div class="form-group">
        <label>Alamat</label>
        <textarea type="text" class="form-control" name="alamat"><?= $data['alamat'] ?></textarea>
    </div>
	<div class="form-group">
        <label>No Hp</label>
        <input type="text" name="notelp" value="<?= $data['notelp'] ?>"
        class="form-control">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" value="<?= $data['email'] ?>"
        class="form-control">
    </div>
	<button type="submit" class="btn btn-primary" name="submit">SIMPAN</i></button>
    <button type="reset" class="btn btn-warning">HAPUS</i></button>
</form>
