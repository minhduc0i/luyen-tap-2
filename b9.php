<?php
function demKyTuXuatHien($chuoi, $kyTu) {
    // Dùng hàm substr_count để đếm số lần xuất hiện của ký tự trong chuỗi
    return substr_count($chuoi, $kyTu);
}


$chuoi = "hello world!";
$kyTu = "o";
echo demKyTuXuatHien($chuoi, $kyTu); 
?>
