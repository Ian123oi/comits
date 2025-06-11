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
        echo $a . " ";

        foreach($array as $alo) {

        if ($alo = 0) {
        $array[$a] = intval($array[$a]) - intval($array[0]); }
        else {
        $array[$a] =  intval($array[$a]) - $oi;
        } 
        echo ($array[$a] .  " ");
        $a--;
        $oi = $a +1;
        
        
        
    } 
   
    /* if ($a<count($array)) {
        $array2[$i] =  ord($array[$i]) + ord($array[$a]); 
        }
        else {
            $array2[$i] = ord($array[$i]) + ord($array[0]);
        } */

    ?>

</body>
</html>