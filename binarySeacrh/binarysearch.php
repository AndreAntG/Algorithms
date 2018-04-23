<?php 
    $array = array(4, 6, 23, '28', 42, 65);
   
    function binarySearch($key , $array) {

        if (isset($key)) {
            $count = sizeof($array);
            $start = 0;
            $end = $count - 1 ;

            while($start <= $end) {

                $mid = floor(($start + $end) / 2);
                    
                if ($array[$mid] == $key){
                
                    return $mid;
                
                } elseif ($key < $array[$mid]) {

                    $end = $mid - 1;
                
                } else {

                    $start = $mid + 1;
                }
            } 
            
            return -1; 
        }
    }


    $result = binarySearch($_POST['key'], $array);
    
    if ($result >= 0) {
        echo "ACHEI E ESTA NO INDICE ". $result;
    } else {
        echo "N ACHEI";
    };   
?>