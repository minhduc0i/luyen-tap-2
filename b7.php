<?php
function demSoTu($chuoi) {

    $tu = preg_split('/\s+/', trim($chuoi));
    return count($tu); 
}

// Ví dụ sử dụng
$chuoi = "Hello world, this is a test.";
echo demSoTu($chuoi); 
?>
