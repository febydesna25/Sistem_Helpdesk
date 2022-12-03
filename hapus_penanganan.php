<?php
    include 'koneksi.php';
    $query = mysqli_query($db, "DELETE FROM data_penanganan WHERE kode_penanganan = '".$_GET['kode_penanganan']."'");
    
    if($query){
        echo "<script>alert('Data Berhasil Di Hapus')</script>";
        echo "<script>location = 'index2.php?p=data_penanganan'</script>";
    }else{
        echo "<script>alert('Data Gagal Di Hapus')</script>";
    }

?>