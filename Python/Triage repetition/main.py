saisie = input("Saisissez votre suite de nombre entier séparé par des espaces : ").split()
filtre = {int (n) for n in saisie if int(n) > 0}
print("Nombres strictement positif saisis (sans repetition) : ", end = ' ')
for k in filtre:
    print(k, end = ' ')