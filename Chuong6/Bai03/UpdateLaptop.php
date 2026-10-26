<?php
$dom = new DOMDocument();
$dom->load('Laptop.xml');

$names = $dom->getElementsByTagName('name');

foreach ($names as $nameNode) {
    if (trim($nameNode->nodeValue) == 'Dell Inpiron 2020') {
        $nameNode->nodeValue = 'Toshiba 2021';
    }
}

$dom->save('Laptop.xml');
echo "Đã cập nhật tên Laptop thành công.";
?>