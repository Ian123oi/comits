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
    $oi2 = 0;
    $teste = array();
    $array2 = array();
    foreach($array as $alo) {

        $teste[$i] = ord($array[$i]);
        if ($a<count($array)) {
        $array2[$i] =  ord($array[$i]) + ord($array[$a]); 
        }
        else {
            $alo5 = ord($array[$i]);
            $array2[$i] = ord($array[$i]) +$array2[0];
            
        }
        echo " ";
        
        
        $oi = $oi . ".". strval($array2[$i]);
        $i++;
        $a++;
    } echo "MENSAGEM CRIPTOGRAFADA: <b> ";
    echo $oi."</b>";
    
echo "<br>";
   

    ?>

    <form action="decodifica.php" method="POST">
    <input type="hidden" name="texto" value="<?php echo($oi)?>">
    <input type="submit" name="sumit" value="Decodificar"></form>
</body>
</html>