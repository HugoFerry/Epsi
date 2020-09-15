def fact(nombre):
    if nombre<2:
        return 1
    else:
        return int(nombre*fact(nombre-1))

def euler(nombre):
    if nombre == 0:
        return 1
    else:
        return euler(nombre - 1) + (1 / fact(nombre))
    

nombre = int(input("Nombre : "))
print(euler(nombre))