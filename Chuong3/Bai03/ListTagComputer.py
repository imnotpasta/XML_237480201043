import xml.etree.ElementTree as ET

tree = ET.parse('Computer.xml')
root = tree.getroot()
tags = []

# Duyệt lấy tên thẻ không trùng lặp
for elem in root.iter():
    if elem.tag not in tags:
        tags.append(elem.tag)

print("Các thẻ hiện có trong tập tin Computer.xml gồm:")
for tag in tags:
    print(f"- {tag}")