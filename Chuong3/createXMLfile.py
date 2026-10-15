from xml.dom import minidom
# create a xml document 
root = minidom.Document()
# create data tag as root tag
data = root.createElement('data')
root.appendChild(data)
#create child tag of data tag
items = root.createElement('items')
data.appendChild(items)

# create child tag of items
item1 = root.createElement('item')
item1.setAttribute('name', 'item1')
item1.setAttribute('price', '5')
items.appendChild(item1)
item1Text = root.createTextNode("book")
item1.appendChild(item1Text)

item2 = root.createElement('item')
item2.setAttribute('name', 'item2')
item2.setAttribute('price', '15')
items.appendChild(item2)
item2Text = root.createTextNode("chair")
item2.appendChild(item2Text)

item3 = root.createElement('item')
item3.setAttribute('name', 'item3')
item3.setAttribute('price', '20')
items.appendChild(item3)
item3Text = root.createTextNode("window")
item3.appendChild(item3Text)

# create a new XML file
mydata = root.toprettyxml(indent="\t")
myxmlfile = open("ListItem.xml", "w")
myxmlfile.write(mydata)
myxmlfile.close()
print("Da tao tap tin xml")
