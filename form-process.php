<?php
header('Content-Type: text/html; charset=UTF-8');
if (isset($_POST['submit'])) 
{
    include("config.php");
    extract($_POST);

    $suvartojimas = $_POST['suvartojimas'];
    $kaina = $_POST['kaina'];
    $galia = $_POST['galia_input'];

    $montavimas = $_POST['montavimas'];
    $puse = $_POST['puse'];
    $seselis = $_POST['seselis'];
    $danga = $_POST['danga'];
    if(empty($danga))
    {
        $danga = $_POST['kita_danga'];
    }
    $ivadas = $_POST['ivadas'];
    $numatyta_galia = $_POST['numatyta_galia'];
    $atsiskaitymas = $_POST['atsiskaitymas'];
    $parama = $_POST['parama'];

    $vardas = $_POST['vardas'];
    $pavarde = $_POST['pavarde'];
    $numeris = $_POST['numeris'];
    $email = $_POST['email'];
    $gatve = $_POST['gatve'];
    $namo_numeris = $_POST['namo_numeris'];
    $miestas = $_POST['miestas'];
    $imones_pavadinimas = $_POST['imones_pavadinimas'];
    $zinute = $_POST['zinute'];

    $sql = "INSERT INTO forma (Suvartojimas, Elektros_tiekejo_kaina, Rekomenduojama_galia, Montavimo_vieta, Stogo_slaito_puse, Seselio_kiekis, Stogo_danga, Elektros_ivadas, Ivado_galia, Atsiskaitymas, Valstybes_parama, Vardas, Pavarde, Tel_Nr, El_pastas, Gatve, Namo_nr, Miestas, Imones_pavadinimas, Zinute) 
    VALUES('$suvartojimas','$kaina', '$galia', '$montavimas', '$puse', '$seselis', '$danga', '$ivadas', '$numatyta_galia', '$atsiskaitymas', '$parama', '$vardas', '$pavarde', '$numeris', '$email', '$gatve', '$namo_numeris', '$miestas', '$imones_pavadinimas', '$zinute')";
    $result = $conn->query($sql);
}
if(!$result)
{
    die("Couldn't enter data: ".$conn->error);
}
$conn->query("ALTER TABLE forma CONVERT TO CHARACTER SET utf8 COLLATE utf8_General_ci;");
echo "<h2 style='text-align: center;'>Ačiū, informaciją gavome.</h2>";
echo "<p class='info'>Artimiausiu metu su Jumis susisieks Origo Power projektų vadovas.</p>";
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>My PHP Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
</body>
</html>