<?php
    function calculMatrix() {
        $matrix = array(
            array(11, 2, 4),
            array(4, 5, 6),
            array(10, 8, -12),
        ); 

        $matrixDiag = count($matrix);

        $firstD = 0;
        $secondD = 0;

        for($x = 0; $x < $matrixDiag; $x++) {
            $firstD += $matrix[$x][$x];
            $secondD += $matrix[$x][$matrixDiag - $x - 1];
        }

        echo abs($firstD - $secondD);
    };

    calculMatrix();

