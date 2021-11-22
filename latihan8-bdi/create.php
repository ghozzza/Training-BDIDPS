<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



    <title>Document</title>
</head>

<body>
    <?php
    require_once("conf.php");
    ?>
    <div class="container">
        
        <h1>WOMEN CARE</h1>
        <div class="card">
            <div class="card-body">
                <h1>Halaman Form Tambah Data</h1>
                <form action="simpan/simpan.php" method="post">
                    <!-- <div class="form-group">
                        <label>ID Kategori</label>
                        <input type="text" name="id_kategori" id="id_kategori" class="form-control" placeholder="Isi ID Kategori">
                    </div> -->
                    <div class="form-group">
                        <label>Nama Kategori</label>
                        <input type="text" name="nama_kategori" id="nama_kategori" class="form-control" placeholder="Isi Nama Kategori" required>
                    </div>
                    <hr>
                    <div class="form-group text-center">
                        <a href="index.php" class="btn btn-md btn-danger">Kembali</a>
                        <button type="submit" class="btn btn-md btn-success">Submit</button>
                        <hr>

                    </div>
                </form>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>