<?php
    $dom = new DOMDocument('1.0', 'UTF-8');
    $dom->formatOutput = true;

    // Tạo thẻ gốc <danhsach>
    $danhsach = $dom->createElement('danhsach');
    $dom->appendChild($danhsach);

    // Mảng dữ liệu công nhân
    $congnhans = [
        ['maso' => '001', 'hoten' => 'Nguyễn Thế Anh', 'donvi' => 'Hành chính', 'luong' => '5.000.000'],
        ['maso' => '002', 'hoten' => 'Nguyễn Thanh Bình', 'donvi' => 'Kỹ thuật', 'luong' => '7.000.000'],
        ['maso' => '003', 'hoten' => 'Vương Thúy Phượng', 'donvi' => 'Tổ chức', 'luong' => '8.000.000']
    ];

    // Lặp qua mảng để tạo các thẻ con
    foreach ($congnhans as $cn_data) {
        $congnhan = $dom->createElement('congnhan');
        
        $maso = $dom->createElement('maso', $cn_data['maso']);
        $congnhan->appendChild($maso);
        
        $hoten = $dom->createElement('hoten', $cn_data['hoten']);
        $congnhan->appendChild($hoten);
        
        $donvi = $dom->createElement('donvi', $cn_data['donvi']);
        $congnhan->appendChild($donvi);
        
        $luong = $dom->createElement('luong', $cn_data['luong']);
        $congnhan->appendChild($luong);
        
        $danhsach->appendChild($congnhan);
    }

    // Lưu thành file nhansu.xml
    $dom->save('nhansu.xml');
    echo "Tạo tập tin nhansu.xml thành công!";
?>