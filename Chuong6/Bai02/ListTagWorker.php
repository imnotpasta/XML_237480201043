<?php
    $doc = new DOMDocument();
    $doc->load('nhansu.xml');
    
    echo "<h2>TÊN CÁC THẺ TRONG TẬP TIN NHANSU.XML</h2>";
    
    // Lấy tất cả các thẻ (*)
    $elements = $doc->getElementsByTagName('*');
    $tagNames = [];

    // Duyệt qua và đưa tên thẻ vào mảng nếu chưa có
    foreach ($elements as $element) {
        if (!in_array($element->nodeName, $tagNames)) {
            $tagNames[] = $element->nodeName;
        }
    }

    // In danh sách các thẻ ra màn hình
    echo "<ul>";
    foreach ($tagNames as $tag) {
        echo "<li>&lt;$tag&gt;</li>";
    }
    echo "</ul>";
?>