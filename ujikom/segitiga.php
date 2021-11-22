<?php
//index.php
include("proses.php");

reset_form();

function clean_text($string)
{
    $string = trim($string);
    $string = stripslashes($string);
    $string = htmlspecialchars($string);
    return $string;
}

if (isset($_POST["submit"])) {
    if (empty($_POST["alas"])) {
        $error['alas'] = '<p><label class="text-danger">Slas wajib diisi</label></p>';
    } else {
        $alas = clean_text($_POST["alas"]);
    }

    if (empty($_POST["tinggi"])) {
        $error['tinggi'] = '<p><label class="text-danger">Tinggi wajib diisi</label></p>';
    } else {
        $tinggi = clean_text($_POST["tinggi"]);
    }

    if (empty($error['alas']) && empty($error['tinggi'])) {
        $file_open = fopen("result.csv", "a");
        $no_rows = count(file("result.csv"));
        if ($no_rows > 1) {
            $no_rows = ($no_rows - 1) + 1;
        }
        $form_data = array(
            'tanggal' => date('Y-m-d H:i'),
            'bangun' => 'Segitiga',
            'sisi'  => NULL,
            'alas' => (int)$alas,
            'tinggi' => (int)$tinggi,
            'jari_jari' => NULL,
            'hasil'  => (int)(segitiga($alas, $tinggi))
        );
        fputcsv($file_open, $form_data);
        reset_form();
        echo "
                <script>
                    window.location.href = 'segitiga.php';
                </script>
            ";
    }
}

function reset_form()
{
    $error['alas'] = NULL;
    $error['tinggi'] = NULL;
    $alas = '';
    $tinggi = '';
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Hitung Luas Bangun Persegi</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <br />
    <div class="container">
        <h2 align="center">Hitung Luas Bangun Segitiga</h2>
        <br />
        <div class="col-md-6" style="margin:0 auto; float:none;">
            <form method="post">
                <h3 align="center">Form Hitung</h3>
                <br />
                <div class="form-group">
                    <label>Alas</label>
                    <input type="number" name="alas" min="0" placeholder="Alas" class="form-control" value="<?php echo $alas; ?>" />
                    <?php
                    if (!empty($error['alas'])) {
                        echo $error['alas'];
                    }
                    ?>
                </div>
                <div class="form-group">
                    <label>Tinggi</label>
                    <input type="number" name="tinggi" min="0" placeholder="Tinggi" class="form-control" value="<?php echo $tinggi; ?>" />
                    <?php
                    if (!empty($error['tinggi'])) {
                        echo $error['tinggi'];
                    }
                    ?>
                </div>
                <div class="form-group" align="center">
                    <a href="persegi.php" class="btn btn-danger">persegi</a>
                    <a href="lingkaran.php" class="btn btn-danger">lingkaran</a>
                    <input type="submit" name="submit" class="btn btn-info" value="Submit" />
                </div>
            </form>
        </div>
    </div>
</body>

</html>