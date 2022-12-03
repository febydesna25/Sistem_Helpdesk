<?php 
    include'koneksi.php';
    $query = mysqli_query($db, "UPDATE item_masalah SET kode_item='".$_POST['kode_item']."',kode_kategori='".$_POST['kode_kategori']."',permasalahan='".$_POST['permasalahan']."',nama='".$_POST['nama']."',email='".$_POST['email']."',alamat='".$_POST['alamat']."',notelp='".$_POST['notelp']."' WHERE kode_item='" . $_POST['kode_item'] . "'");
        
        if($query){
            echo "<script>alert('Data berhasil di edit !')</script>";
            echo "<script>location = 'index2.php?p=data_item'</script>";
        }else{
            echo "<script>alert('Input Gagal')</script>";

        }
?>