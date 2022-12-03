<?php
    include 'koneksi.php';
    $query = mysqli_query($db, "DELETE FROM tiket_masuk WHERE kode_tiket = '".$_GET['kode_tiket']."'");
    
    if($query){
        echo "<script>alert('Data Berhasil Di Hapus')</script>";
        echo "<script>location = 'index2.php?p=data_tiketmasuk'</script>";
    }else{
        echo "<script>alert('Data Gagal Di Hapus')</script>";
    }

?>