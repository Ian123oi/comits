<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criptografia legal</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"> </script>
</head>
<body>
    
   <?php

    $mensagem = $_POST["mensagem"];
    $array = str_split($mensagem);
    $i = 0;
    $a = 1;
    $array2 = array();
    foreach($array as $alo) {

        $array2[$i] =  ord($array[$i]) + $array[$a];
        echo ($array2[$i]);
        echo " ";
        $i++;
        $a++;
    }

    ?>
</body>
</html>