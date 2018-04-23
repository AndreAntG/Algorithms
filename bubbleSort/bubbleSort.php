<?php 

    $array = array(8,4,1,9,5,7,3,2,6,0);
    

    function bubblesort($array) {
        $count = sizeof($array);
        for ($i=0; $i<$count; $i++) {
            for ($j=0; $j<$count-1-$i; $j++) {
                if ($array[$j+1] < $array[$j]) {
                    $array = swappositions($array, $j, $j+1);
                }
            }
        }
        return $array;
    }
    
    function swappositions($array, $left, $right) {
        $old_right_value = $array[$right];
        $array[$right] = $array[$left];
        $array[$left] = $old_right_value;
        return $array;
    }

    $array = bubblesort($array);
    print_r($array);
   
?>    