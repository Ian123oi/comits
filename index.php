<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criptografia legal</title>
</head>
<body>
    
    <form action="mensagem.php" method="POST">

    <label> Digite sua mensagem: </label> <br>
    <input type="textarea" name="mensagem"> </input><br> <br>
    <input type="submit">

</form>

<br> <br>

    <form action="descrip.php" method="POST">
        <label> Digite a mensagem a ser descriptografada: </label> <br>
        <textarea name="mensagem"></textarea> <br> <br>
        <input type="submit">

</body>
</html>