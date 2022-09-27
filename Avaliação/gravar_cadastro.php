<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gravar_Cadastro</title>
</head>
<body>
<?php

    session_start();

    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location: index.php");
        exit;
    }


    $filename = "cadastro.txt";

    if(!file_exists($filename)){
         $handle = fopen($filename, "w");
    } else {
         $handle = fopen($filename, "a");
        }
    
    fwrite($handle, ($_POST['name'])."\n" );
    fwrite($handle, ($_POST['curso'])."\n" );
    fwrite($handle, ($_POST['ra'])."\n" );
    fwrite($handle, ("\n"));
    fflush($handle);
    fclose($handle);
    header("location: cadastro.php");

?>
</body>
</html>