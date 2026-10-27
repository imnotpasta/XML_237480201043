import xml.etree.ElementTree as ET
import os

def update_computer(filename, target_name, new_cpu, new_ram):
    if not os.path.exists(filename):
        print(f"Lỗi: Không tìm thấy tập tin '{filename}'.")
        return

    # Đọc file XML
    tree = ET.parse(filename)
    root = tree.getroot()
    updated = False

    # Duyệt qua các thẻ <computer>
    for comp in root.findall('computer'):
        name_element = comp.find('name')
        
        # Nếu tìm thấy máy tính có tên khớp với target_name
        if name_element is not None and name_element.text.strip() == target_name:
            cpu_element = comp.find('cpu')
            ram_element = comp.find('ram')
            
            # Cập nhật giá trị mới
            if cpu_element is not None:
                cpu_element.text = f" {new_cpu} "
            if ram_element is not None:
                ram_element.text = f" {new_ram} "
                
            updated = True
            break # Dừng tìm kiếm sau khi đã cập nhật

    if updated:
        # Ghi lại thay đổi vào file
        tree.write(filename, encoding='utf-8', xml_declaration=True)
        print(f"Đã cập nhật thành công thông tin cho máy '{target_name}'.")
    else:
        print(f"Không tìm thấy máy tính nào có tên '{target_name}'.")

# Chạy thử nghiệm hàm cập nhật
if __name__ == "__main__":
    # Ví dụ: Sửa RAM của máy Dell thành 16GB và CPU thành Core i7
    update_computer('Computer.xml', 'Dell Inpiron 2020', 'Core i7 3.0Ghz', '16GB')