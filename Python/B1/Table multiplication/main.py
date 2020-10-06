def add(number, base):
    return number + base

def multiply(number, base):
    return number * base

def table(base, op, length=10):
    for x in range(1, length + 1):
        if op == "+":
            result = add(x, base)
        elif op == "*":
            result = multiply(x, base)
        print(f'''{x} {op} {base} = {result}''')

base = int(input("Quel base de calcul souhaitez-vous ? : "))
op = input("Veuillez choisir un type de calcul (+ = addition | * = multiplication) : ")
length = int(input("Combien de ligne souhaitez-vous ? : "))

table(base, op, length)