<?php
$dom = new DOMDocument();
$dom->load('Laptop.xml');
$dom->formatOutput = true;

$root = $dom->getElementsByTagName('laptops')->item(0);

$newLaptop = $dom->createElement('laptop');
$newLaptop->appendChild($dom->createElement('name', 'Asus 2021'));
$newLaptop->appendChild($dom->createElement('cpu', 'Core i5 3.0Ghz'));
$newLaptop->appendChild($dom->createElement('ram', '16GB'));

$root->appendChild($newLaptop);

$dom->save('Laptop.xml');
echo "Đã thêm Asus 2021 vào danh sách.";
?>