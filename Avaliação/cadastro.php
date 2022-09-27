<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class= "wrapper">
        <h2>Cadastrar</h2>
        <p>Favor informar seus dados:</p>
        <form action="gravar_cadastro.php" method="post">
            <div class="form-group">
                <label for="name">Nome Completo</label>
                <input type="text" id = "name" name="name" class="form-control">
                <span class="help-block"></span>
            </div> 
            <div class="form-group">
                <label for="curso">Informe o curso que deseja se cadastrar</label>
                <input type="text" id = "curso" name="curso" class="form-control">
                <span class="help-block"></span>
            </div>   
            <div class="form-group">
                <label for="ra">RA</label>
                <input type="text" id= "ra" name="ra" class="form-control">
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Cadastrar">
            </div>
        </form>
        <div class="form-group">
        <a href="welcome.php" class="btn btn-primary">Voltar</a>
        </div>
    </div>    
</body>
</html>