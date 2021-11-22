<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>edittt</title>
</head>

<body>
    <div class="container">
        <h2>Mengedit data</h2>
        <form action="<?= base_url('karyawan/update/' . $data['id']) ?>" method="post" enctype="">
            <div class="form-group">
                <label for="exampleFormControlInput1">Nama</label>
                <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="karyawan">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Alamat</label>
                <input type="text" name="alamat" class="form-control" id="exampleFormControlInput1" placeholder="Alamat">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Posisi</label>
                <input type="text" name="posisi" class="form-control" id="exampleFormControlInput1" placeholder="Posisi">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Gaji</label>
                <input type="number" name="gaji" class="form-control" id="exampleFormControlInput1" placeholder="Gaji">
            </div>
            <div class="text-right">
                <div class="text-right">
                    <button type="submit" class="btn btn-primary">Konfirmasi</button>
                    <!-- <a href="<?= base_url('/jurusan/') ?>" class="btn btn-primary">Submit</a> -->
                    <a href="<?= base_url('/karyawan/') ?>" class="btn btn-warning">Kembali</a>
                </div>
        </form>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>