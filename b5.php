<?php
function kiemTraSoNguyenTo($n) {

    if ($n < 2) {
        return "$n không phải là số nguyên tố.";
    }


    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return "$n không phải là số nguyên tố.";
        }
    }

    return "$n là số nguyên tố.";
}


$n = 29;
echo kiemTraSoNguyenTo($n); 

$n = 30;
echo "\n" . kiemTraSoNguyenTo($n); 
?>
