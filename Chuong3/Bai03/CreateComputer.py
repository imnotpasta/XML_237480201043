import xml.etree.ElementTree as ET
import xml.dom.minidom as minidom

# Tạo thẻ gốc
root = ET.Element("computers")

# Dữ liệu máy tính theo đề bài (đã sửa </donvi> thành </cpu>)
computer_data = [
    {"name": " Dell Inpiron 2020 ", "cpu": " Core i5 2.6Ghz ", "ram": " 8GB "},
    {"name": " Lenovo ThinPack 2022 ", "cpu": " Core i7 3.6Ghz ", "ram": " 16GB "}
]

for cp in computer_data:
    computer = ET.SubElement(root, "computer")
    for key, value in cp.items():
        child = ET.SubElement(computer, key)
        child.text = value

# Làm đẹp XML và lưu tệp
xmlstr = minidom.parseString(ET.tostring(root)).toprettyxml(indent="    ")
with open("Computer.xml", "w", encoding="utf-8") as f:
    f.write(xmlstr)
print("Đã tạo tệp Computer.xml thành công.")