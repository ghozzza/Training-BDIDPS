Thanks for downloading this template!

Template Name: Imperial
Template URL: https://bootstrapmade.com/imperial-free-onepage-bootstrap-theme/
Author: BootstrapMade.com
License: https://bootstrapmade.com/license/

assets porto
C:\xampp\htdocs\ghoza-studio\assets\img\portfolio

<a href="login.php" title="Books"><i class="bi bi-bag"></i></a>

<form action="update-setting.php" method="post" enctype="multipart/form">
                        <?php
                        $parameter = $_SESSION['ID'];
                        $query = "SELECT * FROM register WHERE ID =" . $parameter;
                        if ($query = mysqli_query($koneksi, $query)) {
                            $row = $query->fetch_assoc();
                        }
                        ?>
                        <!-- <div class="form-group">
                    <label>ID Kategori</label>
                    <input type="text" name="id_kategori" id="id_kategori" class="form-control" placeholder="Isi ID Kategori">
                </div> -->
                        <!-- nama studio, gambar, desc, harga -->
                        <div class="form-group mb-3">
                            <label>Nama Depan</label>
                            <input type="text" name="First_Name" id="First_Name" class="form-control" placeholder="Isi Nama Depan" value="<?php echo $row['First_Name']; ?>" required>
                        </div>
                        <div class="form-group mb-3">
                            <label>Nama Belakang</label>
                            <input type="text" name="Last_Name" id="Last_Name" class="form-control" placeholder="Isi Nama Belakang" value="<?php echo $row['Last_Name']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="Email" placeholder="Email" value="<?php echo $row['Email']; ?>" required="required">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" class="form-control" name="pass" placeholder="Password" required="required">
                        </div>
                        <div class="form-group">
                            <label for="">Confirm Password</label>
                            <input type="password" class="form-control" name="cpass" placeholder="Confirm Password" required="required">
                        </div>
                        <div class="form-group mt-3">
                            <input type="file" name="File" required>
                            <!-- <input type="submit" name="upload" value="Upload" class="btn"> -->
                        </div>
                </div>
                <hr>
                <div class="form-group text-center">
                    <a href="../index.php" class="btn btn-md btn-danger">Kembali</a>
                    <button type="submit" class="btn btn-md btn-success">Submit</button>
                    <hr>
                </div>
                </form>