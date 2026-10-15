import xml.etree.ElementTree as ET

tree = ET.parse('hoso.xml')
root = tree.getroot()
tags = []

# Duyệt theo thứ tự xuất hiện để lấy danh sách thẻ (không trùng lặp)
for elem in root.iter():
    if elem.tag not in tags:
        tags.append(elem.tag)

print("Các thẻ có trong tập tin hoso.xml là:")
for tag in tags:
    print(f"- {tag}")