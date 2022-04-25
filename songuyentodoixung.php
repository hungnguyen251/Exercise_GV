<?php
$a = " ";
$b = " ";

// Đọc các hệ số từ FORM
if (isset ( $_POST ['songuyen_a'] )) {
    $a = $_POST ['songuyen_a'];
}

if (isset ( $_POST ['songuyen_b'] )) {
    $b = $_POST ['songuyen_b'];
}

// Hàm kiêm tra số nguyên tố
function soNguyenTo($n) {
if ($n < 2) {
    echo 'Đây không phải là số nguyên tố';
}

// Check số nguyên tố khi n >= 2
for($j = 2; $j <= sqrt ($n); $j ++) {
    if ($n % $j == 0) {
        return false;
    }
}
return true;
}


// Hàm kiêm tra số nguyên tố đối xứng
function soNguyenToDoiXung ($j) {                 
	$reverse = 0;
    $result = $j;
    while ($j!= 0) {
    	$reverse = $reverse * 10 + $j % 10;   // Tìm số đảo ngược với số cần kiểm tra
    	$j = floor($j / 10);
    	}
    	if ($result == $reverse) {            //Kiểm tra số đảo ngược và số cần kiểm tra xem có bằng nhau không
        	return true;
    	} else {
    		return false;
    	}
}	

if ($a > $b) {
    echo ("Các số nguyên tố đối xứng nhỏ hơn $a và lớn hơn $b là: <br>");
    for($j = 0; $j < $a; $j ++) {
        if ($j > $b) {
            if (soNguyenTo($j) && soNguyenToDoiXung($j)) {
                echo $j . " ";
            }
        }
    }
} else {
    echo ("Các số nguyên tố đối xứng nhỏ hơn $b và lớn hơn $a là: <br>");
    for($j = 0; $j < $b; $j ++) {
        if ($j > $a) {
            if (soNguyenTo($j) && soNguyenToDoiXung($j)) {
                echo $j . " ";
            }
        }
    }
}

?> 

<form action=" " method="POST">
<table>
  <tr>
   <td>Nhập vào số nguyên dương M = </td>
   <td><input type="text" name="songuyen_a" value="<?=$a?>" /></td>
  </tr>
  <tr>
   <td>Nhập vào số nguyên dương N = </td>
   <td><input type="text" name="songuyen_b" value="<?=$b?>" /></td>
  </tr>
  <tr>
   <td></td>
   <td><input type="submit" value="Kết quả"></td>
  </tr>
 </table>
</form>
