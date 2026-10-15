import xml.etree.ElementTree as ET
import xml.dom.minidom as minidom

# Đọc cây XML hiện tại
tree = ET.parse('Computer.xml')
root = tree.getroot()

# Tạo máy tính mới
new_comp = ET.Element("computer")
ET.SubElement(new_comp, "name").text = " Asus 2021 "
ET.SubElement(new_comp, "cpu").text = " Core i5 3.0GHz "
ET.SubElement(new_comp, "ram").text = " 16GB "

# Thêm vào cuối danh sách (root)
root.append(new_comp)

# Cập nhật và định dạng lại tệp
xmlstr = minidom.parseString(ET.tostring(root)).toprettyxml(indent="    ")
# Lọc bỏ các dòng trắng thừa do minidom tạo ra khi append node mới
cleaned_xml = '\n'.join([line for line in xmlstr.split('\n') if line.strip()])

with open("Computer.xml", "w", encoding="utf-8") as f:
    f.write(cleaned_xml)
print("Đã thêm máy tính 'Asus 2021' vào cuối danh sách thành công.")