<?php
$xml = simplexml_load_file('danhsachlop.xml');
echo '<h2> DANH SÁCH SINH VIÊN </h2>';
$list = $xml->sinhvien;
for ($i = 0; $i < count($list); $i++) {
    echo '<b> Họ tên:</b> ' . $list[$i]->hoten . '<br>';
    echo 'Tuổi: ' . $list[$i]->tuoi . '<br>';
    echo 'Ngành: ' . $list[$i]->nganh . '<br><br>';
}
?>