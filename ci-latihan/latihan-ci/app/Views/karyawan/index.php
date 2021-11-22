<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- datatable -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">


    <title>Hello, world!</title>
</head>

<body>
    <div class="container">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">

                            <h5 class="card-title">Default Table</h5>
                            <a href="<?= base_url('/karyawan/tambah') ?>" class="btn btn-primary">Tambah data</a>
                        </div>
                        <table class="table" id="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">alamat</th>
                                    <th scope="col">posisi</th>
                                    <th scope="col">gaji</th>
                                    <th scope="col" class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($data as $i => $d) {
                                ?>
                                    <tr>
                                        <td width="30" class="text-center"><?= $i + 1; ?></td>
                                        <td><?= $d['id']; ?></td>
                                        <td><?= $d['nama']; ?></td>
                                        <td><?= $d['alamat']; ?></td>
                                        <td><?= $d['posisi']; ?></td>
                                        <td><?= $d['gaji']; ?></td>
                                        <td class="text-center">
                                            <a href="<?= base_url('/karyawan/edit/' . $d['id']) ?>" class="btn btn-warning">Edit</a>
                                            <a href="<?= base_url('/karyawan/delete/' . $d['id']) ?>" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#table').DataTable();
        });
    </script>
</body>

</html>