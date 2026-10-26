<?php
$dom = new DOMDocument('1.0', 'UTF-8');
$dom->formatOutput = true;

$laptops = $dom->createElement('laptops');
$dom->appendChild($laptops);

// Laptop 1
$laptop1 = $dom->createElement('laptop');
$laptop1->appendChild($dom->createElement('name', 'Dell Inpiron 2020'));
$laptop1->appendChild($dom->createElement('cpu', 'Core i5 2.6Ghz'));
$laptop1->appendChild($dom->createElement('ram', '8GB'));
$laptops->appendChild($laptop1);

// Laptop 2
$laptop2 = $dom->createElement('laptop');
$laptop2->appendChild($dom->createElement('name', 'Lenovo ThinPack 2022'));
$laptop2->appendChild($dom->createElement('cpu', 'Core i7 3.6Ghz'));
$laptop2->appendChild($dom->createElement('ram', '16GB'));
$laptops->appendChild($laptop2);

$dom->save('Laptop.xml');
echo "Đã tạo tập tin Laptop.xml thành công.";
?>
