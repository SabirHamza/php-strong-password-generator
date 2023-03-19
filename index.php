<?php

require_once(__DIR__ . "/function/function.php");

$alphabet = "abcdefghijklmnopqrstuwxyz";
$alphabetUC = strtoupper($alphabet);
$numbers = "0123456789";
$specialcharacters = "!*]@_-:.}";

$allcharacters = $alphabet . $alphabetUC . $numbers . $specialcharacters;


if(!empty($_GET)){
    $passwordlength = $_GET["passwordlength"];

    session_start();
    $_SESSION["generatorpassword"] = generatorpassword($allcharacters, $passwordlength);
    header("Location: ./result.php");
}
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <h1>Password Genarator</h1>
        <div class="row">
            <form method="GET">
                <div class="col d-flex align-items-center">
                    <input type="number" name="passwordlength">
                    <button class="btn">Genera Password</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>