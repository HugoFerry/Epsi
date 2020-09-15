import math

a = 0
b = 0
c = 0

while a == 0:
    a = int(input('''Entrer la valeur de "a"\n'''))
else:
    b = int(input('''Entrer la valeur de "b" \n'''))
    c = int(input('''Entrer la valeur de "c" \n'''))

delta = int(b ** 2 - 4 * a * c)
if delta > 0:
    x1 = int((-b - math.sqrt(delta)) / (2 * a))
    x2 = int((-b + math.sqrt(delta)) / (2 * a))
    print('''possède 2 racines reelles tel que x1 = {} et x2 = {}'''.format(x1,x2))
elif delta == 0:
    x0 = int((-b) / (2 * a))
    print('''possède 1 racine reelle tel que x0 = {}'''.format(x0))
else:
    print('''ne possede pas de racine reelle''')

valeurSaisie = int(input("veuillez choisir une valeur : "))
sommeEntier = 0
nombreEntiersSaisis = 1
entierSuperieur100 = []

while valeurSaisie != 0:
    if valeurSaisie > 100:
        entierSuperieur100.append(valeurSaisie)


    valeurSaisie = int(input("veuillez choisir une valeur : "))
    sommeEntier += valeurSaisie #sommeEntier = sommeEntier + valeurSaisie
    nombreEntiersSaisis += 1