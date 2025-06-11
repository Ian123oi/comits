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
    $oi = "";
    
    $array2 = array();
    foreach($array as $alo) {

        if ($a<count($array)) {
        $array2[$i] =  ord($array[$i]) + ord($array[$a]); 
        }
        else {
            $array2[$i] = ord($array[$i]) + ord($array[0]);
        }
        echo ($array2[$i]);
        echo " ";
        
        
        $oi = $oi . ".". strval($array2[$i]); 
        $i++;
        $a++;
    } echo "<br>";
    echo $oi;

    ?>

    <form action="decodifica.php" method="POST">
    <input type="hidden" name="texto" value="<?php echo($oi)?>">
    <input type="submit" name="sumit">
</body>
</html>