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
        <?php
        $cek = count($_GET);
        if ($cek > 0) {
            $status = $_GET['status'];
            if ($status == 'success') {
                echo '<div class="alert alert-success" role="alert">
                        Data Kategori berhasil disimpan.
                    </div>';
            } else {
                echo '<div class="alert alert-danger" role="alert">
                        Data kategori gagal disimpan.
                    </div>';
            }
        }
        ?>
        <div class="text-right">
            <a href="create.php" class="btn btn-md btn-primary mb-3">Tambah Data</a>
        </div>
        <ul>
            <table class="table">
                <tr>
                    <th>No</th>
                    <th>ID Kategori</th>
                    <th>Nama Kategori</th>
                    <th class="text-center">
                        Aksi
                    </th>
                </tr>
                <?php
                $query = "SELECT * FROM kategori";

                if ($query = mysqli_query($koneksi, $query)) {
                    $no=1;
                    while ($data = mysqli_fetch_array($query)) {

                            echo "
                            <tr>
                            <td>" . $no . "</td>
                            <td>" . $data['id_kategori'] . "</td>
                            <td>" . $data['nama_kategori'] . "</td>
                            <td class='text-center'>
                            <a href='edit.php?id_kategori=" . $data['id_kategori'] . "' class='btn btn-warning'>Edit</a>
                            <a class='btn btn-danger' onclick='validasi(" . $data["id_kategori"] . ")' href='#'>Hapus</a>
                            </td>
                        </tr>
                        ";
                        $no++;
                    
                    }
                } else {
                    echo "
                     <tr>
                        <td class=colspan-3>data tidak ditemukan</td>
                    </tr>
                     ";
                }
                ?>
                <!-- delete.php?id_kategori=" . $data['id_kategori'] . " -->
            </table>
        </ul>
    </div>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function validasi(param) {
            Swal.fire({
                title: 'Yakin mau hapus?',
                text: "Data yang sudah dihapus tidak bisa dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "delete/delete.php?id_kategori=" + param;
                } else {
                    swal("Data anda aman!");
                }
            })

        }
    </script>
</body>

</html>