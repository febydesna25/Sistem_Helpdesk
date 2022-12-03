<?php
include 'koneksi.php';
$query = mysqli_query($db, "SELECT * FROM data_penanganan WHERE kode_penanganan = '" . $_GET['kode_penanganan'] . "'");
$data = mysqli_fetch_array($query);

?>
<form method="POST" action="aksi_edit2.php">
<div class="container-fluid">
	<div class="row">
		<div class="col">
			<h1>Data Penanganan</h1>
		</div>
	</div>
    <div class="form-group">
        <label>Kode Penanganan</label>
        <input type="text" name="kode_penanganan" value="<?= $data['kode_penanganan'] ?>"
        class="form-control">
    </div>
    <div class="form-group">
        <label>Kode tiket</label>
        <input type="text" name="kode_tiket" value="<?= $data['kode_tiket'] ?>"
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
        <label>Keluhan</label>
        <input type="text" name="permasalahan" value="<?= $data['permasalahan'] ?>"
        class="form-control">
    </div>
    <div class="form-group">
        <label>Penanganan</label>
        <input type="text" name="penanganan" value="<?= $data['penanganan'] ?>"
        class="form-control">
    </div>
	<button type="submit" class="btn btn-primary" name="submit">SIMPAN</i></button>
    <button type="reset" class="btn btn-warning">HAPUS</i></button>
</form>
