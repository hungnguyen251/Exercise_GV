<!-- Chính phương là bình phương của 1 số tự nhiên.
Yêu cầu: Cho số N , hãy đếm xem có bao nhiêu số chính phương từ 1 tới N.
(Với N là số nguyên > 0) -->


<?php
$n = " ";
// Đọc các hệ số từ FORM
if (isset ( $_POST ['songuyenduong_n'] )) {
    $n = $_POST ['songuyenduong_n'];
}

//Hàm kiểm tra số chính phương
function soChinhPhuong($n){
    if($n <= 0) {
        return false;
    }

    $i = 0;
    while ($i*$i <= $n) {
        if ($i*$i == $n) {
            return true;
        } $i++;        
    }
    return false;
}
echo " Số chính phương từ 1 tới $n là :";
for ($i=1; $i < $n; $i++){
    if (soChinhPhuong($i)) {
        echo $i . " ";
    }
}
?>
<form action=" " method="POST">
<table>
  <tr>
   <td>Nhập vào số N = </td>
   <td><input type="text" name="songuyenduong_n" value="<?=$n?>" /></td>
  </tr>
  <tr>
   <td></td>
   <td><input type="submit" value="Kết quả"></td>
  </tr>
 </table>
</form>
