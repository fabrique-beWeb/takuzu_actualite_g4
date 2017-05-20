<?php

$try = 100;
$grid = [];

function generateRow() {
    global $try;
    global $grid;
    $try --;
    $row = [];
    $numbers = array(0, 1);

    for ($i = 0; $i < 8; $i++) {
        $randNumber = array_rand($numbers, 1);
        array_push($row, $randNumber);
    }



    // check row value    
    if (array_sum($row) == 4) {
        array_push($grid, $row);
    } else {
        if ($try > 0) {
            generateRow();
        }
    }
}

function checkTriple($row) {
    $x = 0;

    while ($x < count($row) - 2) {
        if ($row[$x] + $row[$x + 1] + $row[$x + 2] == 0) {
            return TRUE;
        } else {
            return FALSE;
        }
        $x++;
    }
}

//    while ($y < count($row) - 2) {
//        if ($row[$y] == 0 && $row[$y + 1] == 0 && $row[$y + 2] == 0) {
//            echo "triple 0 \n";
//        }
//        $y++;
//    }
//}

function generateGrid() {
    global $grid;
    for ($i = 0; $i < 8; $i++) {

        generateRow();
    }
}

//checkTriple();
//generateRow();
generateGrid();
?>