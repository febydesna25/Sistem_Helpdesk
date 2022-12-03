<?php
    include "koneksi.php";
?>

<div class="center_col" role="main">
    <div class="col-md-12 col-sm-12  ">
        <div class="x_panel">
            <div class="x_content">
                <center><h1>Laporan Tiket Masuk</h1></center>
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Kode Tiket</th>
                                                <th scope="col">Kode Item</th>
                                                <th scope="col">Keluhan</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Alamat</th>
                                                <th scope="col">No Telepon</th>
                                            </tr>
                                        </thead>
                                        <?php
                            include 'koneksi.php';
                            if (isset($_GET['form_tiketmasuk'])) {
                                $data=trim($_GET['form_tiketmasuk']);
                                $sql="SELECT * FROM tiket_masuk JOIN item_masalah USING(kode_item)";
                            }else {
                                $sql="SELECT * FROM tiket_masuk";
                            }
                            $hasil=mysqli_query($db,$sql);
                            $no=0;
                            while ($data = mysqli_fetch_array($hasil)) {
                            $no++;
                            ?>
                        <tbody>
                            <tr class="even pointer">
                                <td><?php echo $no;?></td>
                                <td><?php echo $data["kode_tiket"]; ?></td>
                                <td><?php echo $data["kode_item"]; ?></td>
                                <td><?php echo $data["permasalahan"]; ?></td>
                                <td><?php echo $data["nama"]; ?></td>
                                <td><?php echo $data["email"]; ?></td>
                                <td><?php echo $data["alamat"]; ?></td>
                                <td><?php echo $data["notelp"]; ?></td>
                                
                            </tr>
                        </tbody>
                        <?php
    }
    ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end striped table -->
                        <!-- ============================================================== -->
  <script src="js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script type="text/javascript">
	window.print();

  function PreviewImage() {
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

    oFReader.onload = function (oFREvent) {
      document.getElementById("uploadPreview").src = oFREvent.target.result;
    };
  };
</script>
                        <!-- ============================================================== -->
                        <!-- end striped table -->
                        <!-- ============================================================== -->