import xml.etree.ElementTree as ET

# Phân tích cú pháp tệp XML
tree = ET.parse('danhsach.xml')
root = tree.getroot()

# Duyệt qua các thẻ student và in ra màn hình trên 1 dòng
for i, student in enumerate(root.findall('student'), 1):
    # Thêm .strip() để xóa khoảng trắng và ký tự xuống dòng thừa
    name = student.find('name').text.strip()
    date = student.find('date').text.strip()
    city = student.find('city').text.strip()
    
    # Sử dụng f-string với :<16 để căn lề tên giúp cột ngày tháng thẳng hàng
    print(f"{i}. {name:<16} {date} {city}")