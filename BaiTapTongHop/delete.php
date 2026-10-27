<?php
include 'functions.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $students = getStudents();
    
    $index = 0;
    foreach ($students->student as $s) {
        if ((string)$s->id === $id) {
            unset($students->student[$index]); // Xóa node XML
            saveXML($students);
            break;
        }
        $index++;
    }
}
header('Location: index.php');
exit;
?>