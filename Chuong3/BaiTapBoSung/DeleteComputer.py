import xml.etree.ElementTree as ET
import os

def delete_computer(filename, target_name):
    if not os.path.exists(filename):
        print(f"Lỗi: Không tìm thấy tập tin '{filename}'.")
        return

    # Đọc file XML
    tree = ET.parse(filename)
    root = tree.getroot()
    deleted = False

    # Duyệt qua các thẻ <computer>
    for comp in root.findall('computer'):
        name_element = comp.find('name')
        
        # Nếu tìm thấy máy tính có tên khớp
        if name_element is not None and name_element.text.strip() == target_name:
            # Xóa thẻ <computer> khỏi thẻ cha <computers>
            root.remove(comp)
            deleted = True
            break

    if deleted:
        # Ghi lại cấu trúc XML mới vào file
        tree.write(filename, encoding='utf-8', xml_declaration=True)
        print(f"Đã xóa thành công máy tính '{target_name}'.")
    else:
        print(f"Không tìm thấy máy tính nào có tên '{target_name}' để xóa.")

# Chạy thử nghiệm hàm xóa
if __name__ == "__main__":
    # Ví dụ: Xóa máy tính Lenovo ra khỏi danh sách
    delete_computer('Computer.xml', 'Lenovo ThinPack 2022')