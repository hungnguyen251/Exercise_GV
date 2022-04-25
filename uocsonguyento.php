<?php
$z = " ";
// Đọc các hệ số từ FORM
if (isset ( $_POST ['songuyen_z'] )) {
    $z = $_POST ['songuyen_z'];
}

//Hàm kiểm tra số nguyên tố
function soNguyenTo($n) {
    if ($n < 2) {
        return false;
    }
    // Check số nguyên tố khi n >= 2
    $i = sqrt ($n);
    for($i = 2; $i <= sqrt ($n); $i ++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}
    
// Tìm ước số của Z
function uocSo($z) {
    $p = 1;
    if ($z == 0) {
        echo "Có vô số ước số là số nguyên tố";
    } else {
        echo " Ước số là số nguyên tố của $z là: ";
        for ($i = 1; $i <= $z; $i++) {
            if ($z % $i == 0) {
                if (soNguyenTo ( $i )) {
                    echo $i . " ";
                    echo "<br/>";
                    $p = $p * $i;
                }
            }
        } 
    echo "<br/>" . "Tích của các ước số là : $p ";
    }    
}
uocSo($z);

?> 
<form action=" " method="POST">
<table>
  <tr>
   <td>Nhập vào số Z = </td>
   <td><input type="text" name="songuyen_z" value="<?=$z?>" /></td>
  </tr>
  <tr>
   <td></td>
   <td><input type="submit" value="Kết quả"></td>
  </tr>
 </table>
</form>
