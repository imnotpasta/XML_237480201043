<?php
$dom = new DOMDocument();
$dom->load('Laptop.xml');

$laptops = $dom->getElementsByTagName('laptop');
$nodesToRemove = [];

// Duyệt qua để tìm nút cần xóa
foreach ($laptops as $laptop) {
    $name = $laptop->getElementsByTagName('name')->item(0)->nodeValue;
    if (trim($name) == 'Asus 2021') {
        $nodesToRemove[] = $laptop;
    }
}

// Thực hiện xóa
foreach ($nodesToRemove as $node) {
    $node->parentNode->removeChild($node);
}

$dom->save('Laptop.xml');
echo "Đã xóa laptop Asus 2021.";
?>