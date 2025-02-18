<?php
function tachChuoi($chuoi, $kyTuPhanCach) {
    return explode($kyTuPhanCach, $chuoi);
}

$chuoi = "apple,banana,orange,grape";
$kyTuPhanCach = ",";
$result = tachChuoi($chuoi, $kyTuPhanCach);

print_r($result);
?>
