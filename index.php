<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criptonumeros...</title>
    <style>
        body {
        background-color: lightblue;
        }
    </style>
</head>
<body>
    
            <h1> cifra informático </h1>

    <form action="mensagem.php" method="POST">

    <label> Digite sua mensagem: </label> <br>
    <input type="textarea" name="mensagem"> </input><br> <br>
    <input type="submit" value="Cifrar!">

</form>

<br> <br>

    <form action="decodifica.php" method="POST">
        <label> Digite a mensagem a ser descriptografada: </label> <br>
        <input type="textarea" name="texto" ></input> <br> <br>
        <input type="submit" value="Decodificar!">

        </form>



</body>
</html>