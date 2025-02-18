<?php
function mayTinh($a, $b, $phepTinh) {

    switch ($phepTinh) {
        case '+':
            return $a + $b;
        case '-':
            return $a - $b;
        case '*':
            return $a * $b;
        case '/':
        
            if ($b == 0) {
                return "Lỗi: Không thể chia cho 0.";
            } else {
                return $a / $b;
            }
        default:
            return "Lỗi: Phép tính không hợp lệ.";
    }
}
echo mayTinh(10, 5, '+'); 
echo "\n";
echo mayTinh(10, 5, '-'); 
echo "\n";
echo mayTinh(10, 5, '*'); 
echo "\n";
echo mayTinh(10, 0, '/');
echo "\n";
echo mayTinh(10, 5, '%')
?>
