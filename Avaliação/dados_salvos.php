<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar Dados</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 18px sans-serif; }
        h1{font-size: 58px; font-weight: 900; text-align: center; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
<h1>Dados Cadastrados</h1>
<br>
<br>
<br>
<?php
    session_start();

    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location: index.php");
        exit;
    }
    $filename = "cadastro.txt";

    if(!file_exists($filename)){
         echo "Não existem dados Cadastrados!"."<br>";
    } else {
         $handle = fopen($filename, "r");
         while (!feof($handle)) {
            $line = fgets($handle);
            echo $line ."<br>";
        }
        fclose($handle);
        }
?>
    <br>
    <br>
    <div class="wrapper">
        <a href="welcome.php" class="btn btn-primary">Voltar</a>
    </div>
</body>
</html>