<?php
include 'functions.php';
$result = null;

if (isset($_GET['keyword'])) {
    $keyword = $_GET['keyword'];
    $students = getStudents();
    
    foreach ($students->student as $s) {
        // Tìm kiếm tuyệt đối theo ID
        if ((string)$s->id === $keyword) {
            $result = $s;
            break;
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head><title>Tìm Kiếm Sinh Viên</title></head>
<body>
    <h2>Tìm Kiếm Sinh Viên</h2>
    <form method="GET">
        <p>Nhập Mã SV: <input type="text" name="keyword" required value="<?= $_GET['keyword'] ?? '' ?>"></p>
        <button type="submit">Tìm</button>
        <a href="index.php">Về trang chủ</a>
    </form>

    <hr>
    <?php if (isset($_GET['keyword'])): ?>
        <?php if ($result): ?>
            <h3>Kết quả tìm thấy:</h3>
            <ul>
                <li>Mã SV: <?= $result->id ?></li>
                <li>Họ tên: <?= $result->name ?></li>
                <li>Lớp: <?= $result->class ?></li>
                <li>Điểm: <?= $result->score ?></li>
            </ul>
        <?php else: ?>
            <p style="color:red;">Không tìm thấy sinh viên có mã: <?= htmlspecialchars($_GET['keyword']) ?></p>
        <?php endif; ?>
    <?php endif; ?>
</body>
</html>