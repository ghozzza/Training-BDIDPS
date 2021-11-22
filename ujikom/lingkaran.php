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
    if (empty($_POST["jari"])) {
        $error['jari'] = '<p><label class="text-danger">jari A wajib diisi</label></p>';
    } else {
        $jari = clean_text($_POST["jari"]);
    }

    if (empty($error['jari'])) {
        $file_open = fopen("result.csv", "a");
        $no_rows = count(file("result.csv"));
        if ($no_rows > 1) {
            $no_rows = ($no_rows - 1) + 1;
        }
        $form_data = array(
            'tanggal' => date('Y-m-d H:i'),
            'bangun' => 'Lingkaran',
            'sisi'  => NULL,
            'alas' => NULL,
            'tinggi' => NULL,
            'jari' => (float)$jari,
            'hasil'  => (float)(lingkaran($jari))
        );
        fputcsv($file_open, $form_data);
        reset_form();
        echo "
                <script>
                    window.location.href = 'lingkaran.php';
                </script>
            ";
    }
}

function reset_form()
{
    $error['jari'] = NULL;
    $jari = '';
    $jari_b = '';
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Hitung Luas Bangun lingkaran</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <br />
    <div class="container">
        <h2 align="center">Hitung Luas Bangun lingkaran</h2>
        <br />
        <div class="col-md-6" style="margin:0 auto; float:none;">
            <form method="post">
                <h3 align="center">Form Hitung</h3>
                <br />
                <div class="form-group">
                    <label>jari</label>
                    <input type="number" name="jari" min="0" placeholder="jari" class="form-control" value="<?php echo $jari; ?>" />
                    <?php
                    if (!empty($error['jari'])) {
                        echo $error['jari'];
                    }
                    ?>
                </div>
                <div class="form-group" align="center">
                    <a href="segitiga.php" class="btn btn-danger">segitiga</a>
                    <a href="persegi.php" class="btn btn-danger">persegi</a>
                    <input type="submit" name="submit" class="btn btn-info" value="Submit" />
                </div>
            </form>
        </div>
    </div>
</body>

</html>