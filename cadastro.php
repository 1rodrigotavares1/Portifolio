<?php 

        if(isset($_POST['submit']))

        include_once('config.php');

        $nome = $_POST['nome-empresa'];
        $email = $_POST['email'];
        $numero = $_POST['numero'];

        $resul = mysqli_query($conectado, "INSERT INTO tabela(nomeEmpresa,email,num) VALUES('$nome','$email','$numero')");

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="css/style2.css">
</head>
<body>
    <div>
        <h1>Obrigado pelo seu cadastro, entrarei em contato assim que possível!</h1>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </div>

</body>
</html>
