<?php
$xmlFile = 'students.xml';

// Lấy danh sách sinh viên
function getStudents() {
    global $xmlFile;
    if (file_exists($xmlFile)) {
        return simplexml_load_file($xmlFile);
    }
    return false;
}

// Lưu file XML
function saveXML($xml) {
    global $xmlFile;
    $xml->asXML($xmlFile);
}
?>