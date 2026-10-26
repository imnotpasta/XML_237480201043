<?php
    $xml = simplexml_load_file('nhansu.xml') or die("Lỗi đọc file XML");
    $searchId = "003";

    echo "<h2>THÔNG TIN NHÂN VIÊN MÃ SỐ $searchId </h2>";

    foreach ($xml->congnhan as $cn) {
        if ($cn->maso == $searchId) {
            echo "<b>Mã số:</b> " . $cn->maso . "<br>";
            echo "<b>Họ tên:</b> " . $cn->hoten . "<br>";
            echo "<b>Đơn vị:</b> " . $cn->donvi . "<br>";
            echo "<b>Lương:</b> " . $cn->luong . "<br>";
            break; // Tìm thấy thì dừng vòng lặp
        }
    }
?>