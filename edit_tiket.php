<?php
include 'koneksi.php';
$query = mysqli_query($db, "SELECT * FROM tiket_masuk WHERE kode_tiket = '" . $_GET['kode_tiket'] . "'");
$data = mysqli_fetch_array($query);

?>
<form method="POST" action="aksi_edit1.php">
<div class="container-fluid">
	<div class="row">
		<div class="col">
			<h2>Permohonan Tiket Masuk</h2>
		</div>
	</div>
    <div class="form-group">
        <label>Kode Tiket</label>
        <input type="text" name="kode_tiket" value="<?= $data['kode_tiket'] ?>"
        class="form-control">
    </div>
    <div class="form-group">
        <label>Kode Item</label>
        <input type="text" name="kode_item" value="<?= $data['kode_item'] ?>"
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
        <label>Email</label>
        <input type="text" name="email" value="<?= $data['email'] ?>"
        class="form-control">
    </div>
    <div class="form-group">
        <label>Alamat</label>
        <textarea type="text" class="form-control" name="alamat"><?= $data['alamat'] ?></textarea>
    </div>
	<div class="form-group">
        <label>No Telepon</label>
        <input type="text" name="notelp" value="<?= $data['notelp'] ?>"
        class="form-control">
    </div>
    
	<button type="submit" class="btn btn-primary" name="submit">SIMPAN</i></button>
    <button type="reset" class="btn btn-warning">HAPUS</i></button>
</form>
