<?php
    include 'koneksi.php';
    $query = mysqli_query($db, "DELETE FROM item_masalah WHERE kode_item = '".$_GET['kode_item']."'");
    
    if($query){
        echo "<script>alert('Data Berhasil Di Hapus')</script>";
        echo "<script>location = 'index2.php?p=data_item'</script>";
    }else{
        echo "<script>alert('Data Gagal Di Hapus')</script>";
    }

?>