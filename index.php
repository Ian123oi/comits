<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criptonumeros...</title>
   
</head>
<body>
    
            <h1> cifra informático </h1>

    <br> <br>
    <h1> A Criptografia funciona coletando a mensagem e transformando-a em número, pegando seu código ASCII e colocando em um vetor. Com isso, ela altera o número pegan o valor do primeiro elemento e somando com o seguinte, depois
        do segundo elemento e soma com o seguinte, assim sucessivamente até chegar no último, onde soma com o primeiro elemento já modificado, e então, retorna o valor criptografado em forma de números separados por pontos.

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
