from random import randint

nombre = randint(0, 100) #generer entre 0 et 100
try:
    reponse = int(input("veuillez choisir un nombre : "))
except ValueError:
    reponse = -1

while reponse != nombre and != -1:
    if reponse < nombre:
        print("C'est plus")
    elif reponse > nombre:
        print("C'est moins")

    try:
        reponse = int(input("veuillez choisir un nombre : "))
    except ValueError:
        reponse = -1

print("C'est gagné")
