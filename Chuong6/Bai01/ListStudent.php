<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách sinh viên</title>
    <style>
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            text-align: center;
            font-family: Arial, sans-serif;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <h2 style="text-align: center;">DANH SÁCH SINH VIÊN</h2>

    <?php
        // Đọc dữ liệu từ file XML, nếu lỗi sẽ dừng và báo "Lỗi đọc file"
        $xml = simplexml_load_file('sinhvien.xml') or die("Lỗi đọc file XML!");

        // Khởi tạo bảng HTML
        echo "<table>";
        echo "<tr>
                <th>STT</th>
                <th>ID</th>
                <th>Họ và tên</th>
                <th>Ngày sinh</th>
                <th>Thành phố</th>
              </tr>";

        $stt = 1; // Biến đếm số thứ tự
        
        // Dùng vòng lặp foreach để duyệt qua từng thẻ <student> trong file XML
        foreach($xml->student as $sv) {
            echo "<tr>";
            echo "<td>" . $stt . "</td>";
            echo "<td>" . $sv->id . "</td>";
            echo "<td>" . $sv->name . "</td>";
            echo "<td>" . $sv->date . "</td>";
            echo "<td>" . $sv->city . "</td>";
            echo "</tr>";
            
            $stt++; // Tăng số thứ tự lên 1 sau mỗi lần lặp
        }

        echo "</table>";
    ?>

</body>
</html>