<?php 
    function linearSearch($key, $array) {
        if (isset($key)) {
            $count = sizeof($array);
            $times = 0;
            $result = FALSE;                        
            for ($i = 0; $i < $count; $i++) {
                if ($key == $array[$i]) {
                    $times++;
                    $result = TRUE;                                        
                } 
            }                   

            return ($result) ? $times : FALSE;
        }
    }

    $arr = array(23, 22, 4, 23, 65, 6);

    $result = linearSearch($_POST['key'], $arr);
    if ($result == FALSE) {
        echo "Não encontrei .";
    } else {
        echo "Encontrei e existem " . $result . ".";
    };    
?>
