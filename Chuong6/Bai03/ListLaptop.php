<?php
$xml = simplexml_load_file('Laptop.xml') or die("Không thể tải tệp XML.");

$stt = 1;
foreach ($xml->laptop as $lt) {
    echo $stt . ". name: " . $lt->name . "<br>";
    echo "&nbsp;&nbsp;&nbsp;cpu: " . $lt->cpu . "<br>";
    echo "&nbsp;&nbsp;&nbsp;Ram: " . $lt->ram . "<br><br>";
    $stt++;
}
?>