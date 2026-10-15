import xml.etree.ElementTree as ET

tree = ET.parse('hoso.xml')
root = tree.getroot()

print("Kết quả tìm kiếm nhân viên có mã '002':")
print(f"{'Mã NV':<10} {'Họ và tên':<22} {'Đơn vị':<15} {'Lương'}")
print("-" * 60)

for nv in root.findall('nhanvien'):
    manv = nv.find('manv').text.strip()
    
    if manv == "002":
        hoten = nv.find('hoten').text.strip()
        donvi = nv.find('donvi').text.strip()
        luong = nv.find('luong').text.strip()
        
        # In ngang giống định dạng danh sách
        print(f"{manv:<10} {hoten:<22} {donvi:<15} {luong}")
        break