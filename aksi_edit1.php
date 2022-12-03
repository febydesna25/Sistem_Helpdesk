<?php 
    include'koneksi.php';
    $query = mysqli_query($db, "UPDATE tiket_masuk SET kode_tiket='".$_POST['kode_tiket']."',kode_item='".$_POST['kode_item']."',permasalahan='".$_POST['permasalahan']."',nama='".$_POST['nama']."',email='".$_POST['email']."',alamat='".$_POST['alamat']."',notelp='".$_POST['notelp']."' WHERE kode_tiket='" . $_POST['kode_tiket'] . "'");
        
        if($query){
            echo "<script>alert('Data berhasil di edit !')</script>";
            echo "<script>location = 'index2.php?p=data_tiketmasuk'</script>";
        }else{
            echo "<script>alert('Input Gagal')</script>";

        }
?>