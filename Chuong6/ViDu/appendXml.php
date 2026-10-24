<?php
    $doc = new DOMDocument();
    $doc->load('danhsachlop.xml');
    $doc->preserveWhiteSpace=false;
    $doc->formatOutput = true;

    $studentName = "Nguyễn Hoàng Tiến";
    $studentAge = "20";
    $studentNganh = "Quản trị kinh doanh";

    $root = $doc->getElementsByTagName('danhsach')->item(0);
    $root->append("\t"); //Vào 1 TAB cho thẻ <sinhvien>
    $sinhvien = $doc->createElement('sinhvien');
        $sinhvien->append("\n\t\t"); // Xuống dòng và vào 2 TAB cho thẻ <hoten>
        $hoten = $doc->createElement('hoten', $studentName);
        $sinhvien->appendChild($hoten);
        $sinhvien->append("\n\t\t"); //Xuống dòng và vào 2 TAB cho thẻ <nganh>
        $nganh = $doc->createElement('nganh', $studentNganh);
        $sinhvien->appendChild($nganh);
        $sinhvien->append("\n\t\t"); //Xuống dòng và vào 2 TAB cho thẻ <tuoi>
        $tuoi = $doc->createElement('tuoi', $studentAge);
        $sinhvien->appendChild($tuoi);
        $sinhvien->append("\n\t"); //Xuống dòng và vào 1 TAB cho thẻ <sinhvien>
    $root->appendChild($sinhvien);
    $root->append("\n"); //Xuống dòng cho thẻ <danhsach>

    $doc->save('danhsachlop.xml');
    echo "File danhsachlop.xml has been successfully appended";
?>