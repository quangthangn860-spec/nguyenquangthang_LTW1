<?php
    $a = 14;
    $b = 11;
    echo "Tong: $a + $b = " . ($a + $b) . "<br>";
    echo "Tru: $a - $b = " . ($a - $b) . "<br>";
    echo "Nhan: $a * $b = " . ($a * $b) . "<br>";
    echo "Chia: $a / $b = " . ($a / $b) . "<br>";
    echo "Chia lay du: $a % $b = " . ($a % $b) . "<br>";

    $int = 14;
    $str = "string";
    echo "<br>So sanh $int == $str >> ";
    var_dump($int == $str);
    echo "<br>So sanh $int === $str >> ";
    var_dump($int === $str);
    echo "<br>So sanh $int != $str >> ";
    var_dump($int != $str);
    echo "<br>So sanh $int <> $str >> ";
    var_dump($int <> $str);
    echo "<br>So sanh $int !== $str >> ";
    var_dump($int !== $str);

    $x = 1;
    echo 'Gia tri bien $x = ' . $x;
    echo '<br><br>Tang truoc ++$x: ' . ++$x;
    $x = 1;
    echo '<br>Tang sau $x++: ' . $x++;

    $str1 = "Lap Trinh ";
    $str2 = "Web ";
    echo "<br><br>Noi chuoi bang . : " . $str1 . $str2;
    echo "<br>Noi chuoi bang .= : " . ($str1 .= $str2);

    $str = "nguyenquangthang";
    echo "<br><br>Do dai chuoi khong dau: " . strlen($str);
    $str = "nguyễn quang thắng";
    echo "<br>Do dai chuoi co dau: " . mb_strlen($str, "UTF-8");

    $str = "nguyenquangthang";
    echo "<br><br>Chuoi ban dau: " . $str;
    echo "<br>Chuoi thuong: " . strtolower($str);
    echo "<br>Chuoi hoa: " . strtoupper($str);

    $str1 = "123 abc";
    $str2 = "abc 123";
    echo "<br><br>Ket qua ep kieu chuoi 1: ";
    var_dump((int)$str1);
    echo "<br>Ket qua ep kieu chuoi 2: ";
    var_dump((int)$str2);

    $int = 1;
    $float = 1.0;
    $str = "abc";
    $bool = true;
    echo "<br><br>";
    var_dump($int);
    echo "<br>";
    var_dump($float);
    echo "<br>";
    var_dump($str);
    echo "<br>";
    var_dump($bool);
?>