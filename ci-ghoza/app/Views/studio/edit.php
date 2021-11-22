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
        <form action="<?= base_url('studio/update/' . $data['id']) ?>" method="post" enctype="multipart/form-data">
            <div class="form-group mb-3">
                <label>Nama Studio</label>
                <input type="text" name="nama_studio" id="nama_kategori" class="form-control" placeholder="Isi Nama Studio" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1" rows="3" placeholder="Isi deskripsi"></textarea>
            </div>
            <div class="row">
                <div class="col-1">
                    <div class="form-group mb-3">
                        <label>Harga</label>
                        <input type="text" name="harga" id="nama_kategori" class="form-control" placeholder="IDR" disabled>
                    </div>
                </div>
                <div class="col-5">
                    <div class="form-group mb-3">
                        <label></label>
                        <input type="number" step="1" name="harga" id="nama_kategori" class="form-control" placeholder="Harga studio" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Foto studio</label>
                        <input class="form-control" name="gambar" type="file" id="formFile">
                        <p>Pastikan ukuran foto 800x600px</p>
                        <br>
                        <!-- fotooooolololololo -->
                        <div class="text-right">

                            <button type="submit" class="btn btn-primary">Konfirmasi</button>
                     
                            <a href="<?= base_url('/studio/') ?>" class="btn btn-warning">Kembali</a>
                        </div>
                    </div>
                </div>
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