#!C:\Python\python.exe
print("content-Type: text/html\n\n");

import cgi

form = cgi.FieldStorage()

nombre = form.getvalue("nombre")

print (nombre)


