import xml.etree.ElementTree as ET

# Phân tích cú pháp tệp XML
tree = ET.parse('Computer.xml')
root = tree.getroot()

# Duyệt qua các thẻ computer và in ra màn hình giống định dạng sách giáo khoa
for i, comp in enumerate(root.findall('computer'), 1):
    # Dùng strip() để xóa khoảng trắng thừa ở đầu/cuối
    name = comp.find('name').text.strip()
    cpu = comp.find('cpu').text.strip()
    ram = comp.find('ram').text.strip()
    
    # In ra đúng định dạng yêu cầu
    print(f"{i}. name: {name}")
    print(f"   cpu: {cpu}")
    print(f"   Ram: {ram}")