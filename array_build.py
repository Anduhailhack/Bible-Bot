names = open("names.txt")
aray = open("array.txt", "w")

arr = "["
count = 0;
for name in names:
    if name != "\n":
        name = name.split("=")[1]
        name = name.replace("_", "\" . \"%20\" . \"")
        name = name.encode("utf-8")
        name = str(name)

        arr += '\t[\"text\"=>{}, \"callback_data\"=>\"{}\"],\n'.format(name, count)
        count+=1

arr += "]"

print (arr)
aray.write(arr)
