import xml.etree.ElementTree as ET
import xml.dom.minidom as minidom

# Tạo thẻ gốc <danhsach>
root = ET.Element("danhsach")

# Dữ liệu nhân viên theo đề bài
nhanvien_data = [
    {"manv": " 001 ", "hoten": " Nguyen The Anh ", "donvi": " Hanh chinh ", "luong": " 5.000.000 "},
    {"manv": " 002 ", "hoten": " Nguyen Thanh Binh ", "donvi": " Ky thuat ", "luong": " 7.000.000 "},
    {"manv": " 003 ", "hoten": " Vuong Thuy Phuong ", "donvi": " To chuc ", "luong": " 8.000.000 "}
]

# Thêm các thẻ con vào thẻ gốc
for nv in nhanvien_data:
    nhanvien = ET.SubElement(root, "nhanvien")
    for key, value in nv.items():
        child = ET.SubElement(nhanvien, key)
        child.text = value

# Làm đẹp XML và ghi ra tệp
xmlstr = minidom.parseString(ET.tostring(root)).toprettyxml(indent="    ")
with open("hoso.xml", "w", encoding="utf-8") as f:
    f.write(xmlstr)
print("Đã tạo tệp hoso.xml thành công.")