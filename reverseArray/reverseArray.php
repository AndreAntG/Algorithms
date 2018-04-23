<?php 
    $array = array(1, 2, 3, 4, 5);
   
    function reverseArray($array) {
        $count = sizeof($array);
        $i = 0;

        while($i < $count) {
            $temp = $array[$i];
            $array[$i] = $array[$count - 1];
            $array[$count - 1] = $temp;
            $i++;
            $count--;
        } 

        return $array;
    }

    foreach ($array as $item) {
        echo $item . " ";
    }

    echo "<br >";

    $test = reverseArray($array);

    foreach ($test as $item) {
        echo $item . " ";
    }
?>