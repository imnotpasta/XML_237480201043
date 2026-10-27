<?php
include 'functions.php';
$students = getStudents();
$id = $_GET['id'] ?? '';
$targetStudent = null;

// Tìm sinh viên để hiển thị lên form
foreach ($students->student as $s) {
    if ((string)$s->id === $id) {
        $targetStudent = $s;
        break;
    }
}

// Xử lý khi nhấn nút Cập nhật
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($students->student as $s) {
        if ((string)$s->id === $_POST['id']) {
            $s->name = $_POST['name'];
            $s->class = $_POST['class'];
            $s->score = $_POST['score'];
            saveXML($students);
            header('Location: index.php');
            exit;
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head><title>Cập nhật Sinh Viên</title></head>
<body>
    <h2>Cập nhật Sinh Viên</h2>
    <?php if ($targetStudent): ?>
    <form method="POST">
        <p>Mã SV: <input type="text" name="id" value="<?= $targetStudent->id ?>" readonly style="background:#eee;"></p>
        <p>Họ Tên: <input type="text" name="name" value="<?= $targetStudent->name ?>" required></p>
        <p>Lớp: <input type="text" name="class" value="<?= $targetStudent->class ?>" required></p>
        <p>Điểm: <input type="number" step="0.1" name="score" value="<?= $targetStudent->score ?>" required></p>
        <button type="submit">Cập nhật</button>
        <a href="index.php">Hủy</a>
    </form>
    <?php else: ?>
        <p>Không tìm thấy sinh viên!</p>
        <a href="index.php">Quay lại</a>
    <?php endif; ?>
</body>
</html>