<?php
include 'functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $students = getStudents();
    $student = $students->addChild('student');
    $student->addChild('id', $_POST['id']);
    $student->addChild('name', $_POST['name']);
    $student->addChild('class', $_POST['class']);
    $student->addChild('score', $_POST['score']);
    
    saveXML($students);
    header('Location: index.php'); // Chuyển về trang chủ
    exit;
}
?>
<!DOCTYPE html>
<html>
<head><title>Thêm Sinh Viên</title></head>
<body>
    <h2>Thêm Sinh Viên Mới</h2>
    <form method="POST" onsubmit="return validateForm()">
        <p>Mã SV: <input type="text" name="id" id="id"></p>
        <p>Họ Tên: <input type="text" name="name" id="name"></p>
        <p>Lớp: <input type="text" name="class" id="class"></p>
        <p>Điểm: <input type="number" step="0.1" name="score" id="score"></p>
        <button type="submit">Lưu</button>
        <a href="index.php">Quay lại</a>
    </form>

    <script>
        function validateForm() {
            var id = document.getElementById('id').value;
            var name = document.getElementById('name').value;
            if (id == "" || name == "") {
                alert("Vui lòng nhập đầy đủ Mã SV và Họ tên (Javascript Validation)!");
                return false;
            }
            return true;
        }
    </script>
</body>
</html>