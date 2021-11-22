<?php
//index.php
    include("../proses/hitung.php");

    reset_form();

    function clean_text($string)
    {
        $string = trim($string);
        $string = stripslashes($string);
        $string = htmlspecialchars($string);
        return $string;
    }

    if(isset($_POST["submit"]))
    {
        if(empty($_POST["sisi"]))
        {
            $error['sisi'] = '<p><label class="text-danger">Sisi A wajib diisi</label></p>';
        }
        else
        {
            $sisi = clean_text($_POST["sisi"]);
        }

        if(empty($error['sisi']))
        {
            $file_open = fopen("../result.csv", "a");
            $no_rows = count(file("../result.csv"));
            if($no_rows > 1)
            {
                $no_rows = ($no_rows - 1) + 1;
            }
            $form_data = array(
                'tanggal' => date('Y-m-d H:i'),
                'bangun' => 'Persegi',
                'sisi'  => (int)$sisi,
                'alas' => NULL,
                'tinggi' => NULL,
                'jari_jari' => NULL,
                'hasil'  => (int)(persegi($sisi))
            );
            fputcsv($file_open, $form_data);
            reset_form();
            echo "
                <script>
                    window.location.href = '../index.php';
                </script>
            ";
        }
    }

    function reset_form()
    {
        $error['sisi'] = NULL;
        $sisi = '';
        $sisi_b = '';
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
        <h2 align="center">Hitung Luas Bangun Persegi</h2>
        <br />
        <div class="col-md-6" style="margin:0 auto; float:none;">
            <form method="post">
                <h3 align="center">Form Hitung</h3>
                <br />
                <div class="form-group">
                    <label>Sisi</label>
                    <input type="number" name="sisi" min="0" placeholder="Sisi" class="form-control" value="<?php echo $sisi; ?>" />
                    <?php
                        if (!empty($error['sisi'])) {
                            echo $error['sisi'];
                        }
                    ?>
                </div>
                <div class="form-group" align="center">
                    <a href="../index.php" class="btn btn-danger">Kembali</a>
                    <input type="submit" name="submit" class="btn btn-info" value="Submit" />
                </div>
            </form>
        </div>
    </div>
</body>
</html>