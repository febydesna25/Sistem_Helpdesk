<div class="center_col" role="main">
    <div class="col-md-12 col-sm-12  ">
        <div class="x_panel">
            <div class="x_content">
                <h1>Laporan Rating</h1>
                <div class="form-group">
                            <a href="index2.php?p=print_rating" class="btn btn-warning"><i class="fa fa-print"></i></a>
                    </div>
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Kode Rating</th>
                                                <th scope="col">Kode Penanganan</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Keluhan</th>
                                                <th scope="col">Penanganan</th>
                                                <th scope="col">Rating</th>
                                            </tr>
                                        </thead>
                                        <?php
                            include 'koneksi.php';
                            if (isset($_GET['input_rating'])) {
                                $data=trim($_GET['input_rating']);
                                $sql="SELECT * FROM rating JOIN data_penanganan USING(kode_penanganan)";
                            }else {
                                $sql="SELECT * FROM rating";
                            }
                            $hasil=mysqli_query($db,$sql);
                            $no=0;
                            while ($data = mysqli_fetch_array($hasil)) {
                            $no++;
                            ?>
                        <tbody>
                            <tr class="even pointer">
                                <td><?php echo $no;?></td>
                                <td><?php echo $data["kode_rating"]; ?></td>
                                <td><?php echo $data["kode_penanganan"]; ?></td>
                                <td><?php echo $data["nama"]; ?></td>
                                <td><?php echo $data["email"]; ?></td>
                                <td><?php echo $data["permasalahan"]; ?></td>
                                <td><?php echo $data["penanganan"]; ?></td>
                                <td><?php echo $data["beri_rating"]; ?></td>
                            </tr>
                        </tbody>
                        <?php
    }
    ?>
                                    </table>
                                </div>
                            </div>
                        </div>