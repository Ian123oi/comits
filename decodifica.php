<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decodifica</title>
</head>
<body>
    
    <?php

       $numero = $_POST["texto"];
       $i = 0;
    
        $array = explode(".",$numero);
        $a = count($array) -1;
        $oi = $a + 1;
        $cont = 0;
        $frase = "";
        
        

        foreach($array as $alo) {


            
        
        if ($cont == 0) {
        $array[$a] = intval($array[$a]) - intval($array[1]);  }
        
        else if ($a ==0) {
            break;
        }
        @$array[$a] =  intval($array[$a]) - ($array[$oi]); 
        $a--;
        $oi = $a +1;
        $cont++;
        
        
        
    } $cont2 =0;
        foreach($array as $alo2) {
            $cont2++;
            @$frase = $frase . chr(intval($array[$cont2]));
        }
        echo "MENSAGEM DESCRIPTOGRAFADA: <b>";
        echo $frase ."</b> <br> <br> <br>";

        ?>

        <a href="index.php">Voltar para Home</a>
    

</body>
</html>