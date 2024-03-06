<?php 
    declare(strict_types= 1);
    session_start();
    $_SESSION["name"] = "Son";
    setcookie("user", "Sơn", time() + 60,'/'); // Hết hạn sau 60s
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
</head>
<body>
    <div>
        <?php
            // echo "<h1>Hello World</h1>";
            // $ten = "Hồng Sơn";
            // $tuoi = "27";
            // echo "<h1>$ten</h1>";

            // Tạo hằng số
            // define("DOMAIN_NAME","vr360");
            // echo DOMAIN_NAME;

            // $a = array(
            //     "Sinh viên" => array("Ngọc Anh", "Thu Hương"),
            //     "Giảng viên" => array("Thành Luân", "Trọng Triều", "Văn Quyết"),
            //     array(
            //         "Khánh" => 20,
            //         "Đức" => 18
            //         )
            // );
            // // echo $a["Sinh viên"][0];
            // // echo $a[2]["Đức"];
            // echo $a[0]["Đức"];

            // $i =1 ;
            // while ($i < 5){
            //     echo "<h1>vòng lặp thứ:$i </br></h1>" ;
            //     $i++ ;
            // }

            // for ($i = 0; $i <br 7; ++$i) {
            //     echo "Vòng lặp thứ: $i<br/>";
            // }

            // $sinhVien = array(
            //     "Ngọc Anh" => 18,
            //     "Hà" => 19,
            //     "Hương" => 22
            // );
            
            // // Lặp qua từng phần tử với foreach
            // foreach ($sinhVien as $ten => $tuoi) {
            //     echo "$ten: $tuoi tuổi"."<br/>";
            // }

            // function sum(int $a, int $b) :int {
            //     $tong = $a / $b ;
            //     return (int)$tong;
            // }
            // echo sum(5, 3);

            // function gopHoTen($ten, $ho){
            //     $hoTen = array($ten, $ho);
            //     return $hoTen;
            //   }
    
            // foreach($arr= gopHoTen("Pham","Son") as $ketQUa ){
            //     echo $ketQUa."</br>";
            // }

            // function congDiem(&$diem) {
            //     $diem += 3;
            // }
            // $diemThat = 4;
            // congDiem($diemThat);
            // congDiem($diemThat);

            // echo $diemThat;

            // echo $_SERVER['PHP_SELF'];
            // echo "Xin chào bạn ".$_SESSION['name'];
            // $a = "Son";            
            // echo <<<EOT
            //     chào /$a </br>
            // EOT;

            // echo <<<'EOT'
            //     chào $a 
            // EOT;

            echo 'đây là một thẻ html </br>';

            echo 'the cookie has been set for 60 seconds';
        ?>
    </div>
</body> 
</html>