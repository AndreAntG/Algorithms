<?php 
   
    function reversePalindromo($key) {
        $count = sizeof($key);
        $i = 0;

        while($i < $count) {
            $temp = $key[$i];
            $key[$i] = $key[$count - 1];
            $key[$count - 1] = $temp;
            $i++;
            $count--;
        } 

        return $key;
    }

    $array = str_split($_POST['key']);

    foreach ($array as $item) {
        echo $item . " ";
    }

    echo "<br >";



     $result = reversePalindromo($array);

    foreach ($result as $item) {
        echo $item . " ";
    }

    echo "<br >";

    if ($_POST['key'] == implode('', $result)) {
        echo "É um palimdromo";
    } else {
        echo "Não é um palimdromo";

    }
       
?>