<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <title>Hitung Bangun</title>
    </head>
    <body>
        <div class="container pt-5">
            <div class="row">
                <div class="col-12 text-center">
                    <h1>Program Hitung Bangun</h1>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-4">
                    <div class="card text-center" style="width: 18rem;">
                        <img class="card-img-top" src="https://th.bing.com/th/id/OIP.FN8NW0y88mIfmrLRqh4VyQAAAA?pid=ImgDet&rs=1" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Bangun Persegi</h5>

                            <a href="views/persegi.php" class="btn btn-primary">Mulai Menghitung</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card text-center" style="width: 18rem;">
                        <img class="card-img-top" src="https://th.bing.com/th/id/OIP.gqdeoQn3CvkDky0fz_cLWQHaF6?pid=ImgDet&rs=1" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Bangun Segitiga</h5>

                            <a href="views/segitiga.php" class="btn btn-primary">Mulai Menghitung</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card text-center" style="width: 18rem;">
                        <img class="card-img-top" src="https://1.bp.blogspot.com/-GWSvqRSII80/WSp3my4sQVI/AAAAAAAAAVA/vDc-yTsPCBsnekcTclZWSiVrUJ2DBsN1ACLcB/s1600/nknklsad.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Bangun Lingkaran</h5>

                            <a href="views/lingkaran.php" class="btn btn-primary">Mulai Menghitung</a>
                        </div>
                    </div>
                </div>  
            </div>
            <hr>
            <?php  
                if (($open = fopen("result.csv", "r")) !== FALSE) 
                {
                    $array = array();
                    $max = 0;
                    $min = 0;
                    $total = 0;
                    $persegi = 0;
                    $segitiga = 0;
                    $lingkaran = 0;
                    $i = 0;
                    while (($data = fgetcsv($open, 1000, ",")) !== FALSE) 
                    {        
                        $array[] = $data; 
                        if ($data['6'] >= $max) {
                            $max = $data['6'];
                        }
                        if ($data['6'] <= $min || $i ==0) {
                            $min = $data['6'];
                        }
                        $total += $data['6'];
                        if ($data['1'] == 'Persegi') {
                            $persegi += $data['6'];
                        }
                        if ($data['1'] == 'Segitiga') {
                            $segitiga += $data['6'];
                        }
                        if ($data['1'] == 'Lingkaran') {
                            $lingkaran += $data['6'];
                        }
                        $i++;
                    }

                    fclose($open);
                }
            ?>
            <div class="row">
                <div class="col-4">
                    <div class="alert alert-success" role="alert">
                        <h4 class="alert-heading">Total Perhitungan</h4>
                        <hr>
                        <p class="mb-0"><?= count($array) ?></p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="alert alert-primary" role="alert">
                        <h4 class="alert-heading">Nilai Maksimum</h4>
                        <hr>
                        <p class="mb-0"><?= $max; ?></p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="alert alert-warning" role="alert">
                        <h4 class="alert-heading">Nilai Minimum</h4>
                        <hr>
                        <p class="mb-0"><?= $min; ?></p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="alert alert-info" role="alert">
                        <h4 class="alert-heading">Persentase Persegi</h4>
                        <hr>
                        <p class="mb-0"><?= number_format((($persegi/$total) * 100), 2); ?>%</p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="alert alert-info" role="alert">
                        <h4 class="alert-heading">Persentase Segitiga</h4>
                        <hr>
                        <p class="mb-0"><?= number_format((($segitiga/$total) * 100), 2); ?>%</p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="alert alert-info" role="alert">
                        <h4 class="alert-heading">Persentase Lingkaran</h4>
                        <hr>
                        <p class="mb-0"><?= number_format((($lingkaran/$total) * 100), 2); ?>%</p>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>