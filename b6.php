<?php
function kiemTraNamNhuan($nam) {
    if (($nam % 4 == 0 && $nam % 100 != 0) || ($nam % 400 == 0)) {
        return "$nam là năm nhuận.";
    } else {
        return "$nam không phải là năm nhuận.";
    }
}

$nam = 2024;
echo kiemTraNamNhuan($nam);

$nam = 2023;
echo "\n" . kiemTraNamNhuan($nam);

$nam = 2000;
echo "\n" . kiemTraNamNhuan($nam);

$nam = 1900;
echo "\n" . kiemTraNamNhuan($nam);
?>
