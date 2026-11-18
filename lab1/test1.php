<?php
echo "Họ và tên: Nguyễn Thị Tố Uyên <br>";
echo "Ngày sinh: 04/09/2007 <br>";
echo "MSSV:2125110094 <br>";

$HOTEN ="Nguyễn Thị Tố Uyên";
$MSSV ="2125110094";
$SDT="0867664493";
$NGAYSINH="04/09/2007";
echo "Họ tên: " . $HOTEN . "<br>";
echo "MSSV: " . $MSSV . "<br>";
echo "Số điện thoại: " . $SDT . "<br>";
echo "Ngày sinh: " . $NGAYSINH . "<br>";

define("HOST", "localhost");
define("DATABASE", "ten_csdl");
define("USERNAME", "root");
define("PASSWORD", "");

echo "HOST: " . HOST . "<br>";
echo "DATABASE: " . DATABASE . "<br>";
echo "USERNAME: " . USERNAME . "<br>";
echo "PASSWORD: " . PASSWORD . "<br>";
echo "<hr>";


echo "Nháy kép: Xin chào $hoTen <br>"; 
echo 'Nháy đơn: Xin chào $hoTen <br>';