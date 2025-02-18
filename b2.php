<?php
function kiemTraChanLe($n) {
   
    if ($n % 2 == 0) {
        return "Số $n là số chẵn.";
    } else {
        return "Số $n là số lẻ.";
    }
}


echo kiemTraChanLe(10);
echo "\n";
echo kiemTraChanLe(7);  
?>
