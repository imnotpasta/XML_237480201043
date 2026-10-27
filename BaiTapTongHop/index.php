<?php
include 'functions.php';
$students = getStudents();
$totalStudents = 0;
$totalScore = 0;
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Quản lý Sinh Viên</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { border-collapse: collapse; width: 80%; margin-top: 20px; }
        th, td { border: 1px solid #ccc; padding: 10px; text-align: center; }
        th { background-color: #f4f4f4; }
        .menu a { margin-right: 15px; text-decoration: none; padding: 5px 10px; background: #007bff; color: white; border-radius: 3px; }
        .stats { margin-top: 20px; padding: 15px; background: #e9ecef; width: 77%; }
    </style>
</head>
<body>
    <h2>Danh Sách Sinh Viên</h2>
    
    <div class="menu">
        <a href="add.php">Thêm Sinh Viên</a>
        <a href="search.php">Tìm Kiếm</a>
    </div>

    <table>
        <tr>
            <th>Mã SV</th>
            <th>Họ Tên</th>
            <th>Lớp</th>
            <th>Điểm</th>
            <th>Thao tác</th>
        </tr>
        <?php if ($students): ?>
            <?php foreach ($students->student as $s): 
                $totalStudents++;
                $totalScore += (float)$s->score;
            ?>
            <tr>
                <td><?= $s->id ?></td>
                <td><?= $s->name ?></td>
                <td><?= $s->class ?></td>
                <td><?= $s->score ?></td>
                <td>
                    <a href="edit.php?id=<?= $s->id ?>">Sửa</a> | 
                    <a href="delete.php?id=<?= $s->id ?>" onclick="return confirm('Bạn có chắc muốn xóa?');">Xóa</a>
                </td>
            </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan="5">Không có dữ liệu.</td></tr>
        <?php endif; ?>
    </table>

    <div class="stats">
        <h3>Thống kê</h3>
        <p>Tổng số sinh viên: <strong><?= $totalStudents ?></strong></p>
        <p>Điểm trung bình: <strong><?= $totalStudents > 0 ? round($totalScore / $totalStudents, 2) : 0 ?></strong></p>
    </div>
</body>
</html>