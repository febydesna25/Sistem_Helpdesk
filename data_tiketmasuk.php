<div class="center_col" role="main">
    <div class="col-md-12 col-sm-12  ">
        <div class="x_panel">
            <div class="x_content">
                <h1>Data Tiket Masuk</h1>
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
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <?php
                            include 'koneksi.php';
                            {
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
                                <td class="">
                                <div class="btn-group" role="group">
                                    <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Options</button>
                                    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                        <a class="dropdown-item btn" href="index2.php?p=edit_tiket&kode_tiket=<?php echo $data['kode_tiket']?>&kode_item=<?php echo $data['kode_item']?>">Edit</a>
                                        <a class="dropdown-item btn" href="index2.php?p=hapus_tiket&kode_tiket=<?php echo $data["kode_tiket"]; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                                        <a class="dropdown-item btn" href="index2.php?p=input_penanganan&kode_tiket=<?php echo $data['kode_tiket']?>&kode_item=<?php echo $data['kode_item']?>">input penanganan</a>
                                    </div>
                                </div>
                                </td>
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