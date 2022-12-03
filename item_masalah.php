<?php
    function generateRandomString($length = 4) {
        return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
    }
    
    $kode_item= generateRandomString(); 
?>

<form method="POST" action="aksi_item.php">
<div class="container-fluid">
	<div class="row">
		<div class="col">
			<h2>Form Item Masalah</h2>
		</div>
	</div>
    <div class="form-group">
        <label>Kode Item</label>
        <input type="text" name="kode_item" value="<?php echo $kode_item ?> "placeholder="Masukkan Kode Item"
        class="form-control">
    </div>
	<div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" placeholder="Masukkan Nama"
        class="form-control">
    </div>
	<div class="form-group">
        <label>Email</label>
        <input type="email" name="email" placeholder="Masukkan email"
        class="form-control">
    </div>
	<div class="form-group">
        <label>No Telepon</label>
        <input type="number" name="notelp" placeholder="Masukkan No telepon"
        class="form-control">
    </div>
	<div class="form-group">
        <label>Alamat</label>
        <textarea type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat"></textarea>
    </div>
	<?php
    include "koneksi.php";
    $ambil = mysqli_query($db, "SELECT * FROM kategori_masalah WHERE kode_kategori ='$_GET[kode_kategori]'");
    $data = mysqli_fetch_array($ambil);
	?>
	<div class="form-group">
        <label>Kategori Masalah</label>
        <input type="text" name="kode_kategori" value="<?= $data['kode_kategori']?>"
        class="form-control">
    </div>
	<div class="form-group">
        <label>keluhan</label>
        <textarea type="text" class="form-control" name="permasalahan" placeholder="Masukkan Permasalahan"></textarea>
    </div>
	<button type="submit" class="btn btn-primary btn-sm " name="submit">SIMPAN</button>
    <button type="reset" class="btn btn-warning btn-sm">HAPUS</button><br>
</form>