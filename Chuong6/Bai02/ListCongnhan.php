<?php
    $xml = simplexml_load_file('nhansu.xml') or die("Lỗi đọc file XML");

    echo "<h2>DANH SÁCH CÔNG NHÂN</h2>";
    echo "<table border='1' cellpadding='10' style='border-collapse: collapse;'>";
    echo "<tr><th>Mã số</th><th>Họ tên</th><th>Đơn vị</th><th>Lương</th></tr>";

    foreach ($xml->congnhan as $cn) {
        echo "<tr>";
        echo "<td>" . $cn->maso . "</td>";
        echo "<td>" . $cn->hoten . "</td>";
        echo "<td>" . $cn->donvi . "</td>";
        echo "<td>" . $cn->luong . "</td>";
        echo "</tr>";
    }
    
    echo "</table>";
?>