import xml.etree.ElementTree as ET

tree = ET.parse('hoso.xml')
root = tree.getroot()

# In tiêu đề các cột cho dễ nhìn
print(f"{'Mã NV':<10} {'Họ và tên':<22} {'Đơn vị':<15} {'Lương'}")
print("-" * 60)

for nv in root.findall('nhanvien'):
    # Dùng .strip() để xóa khoảng trắng và ký tự xuống dòng thừa từ file XML
    manv = nv.find('manv').text.strip()
    hoten = nv.find('hoten').text.strip()
    donvi = nv.find('donvi').text.strip()
    luong = nv.find('luong').text.strip()
    
    # In dữ liệu trên cùng 1 dòng, căn lề thẳng hàng
    print(f"{manv:<10} {hoten:<22} {donvi:<15} {luong}")