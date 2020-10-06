# Programme affichant la somme des entiers naturels saisis,
# le nombre de saisies, et le nombre d'entiers supérieurs à 100 saisis.
# Auteur : Jean-Charles DUCHEIN
# Version : 2 février 2020

# Initialisation des variables
somme, nombreTotal, nombreGrands = 0, 0, 0

# Saisie des entiers naturels et calcul des résultats
x = int(input("Saisissez un entier naturel (0 pour terminer) : "))
while x > 0:
    somme += x
    nombreTotal += 1
    if x > 100:
        nombreGrands += 1
    x = int(input("Saisissez un entier naturel (0 pour terminer) : "))

# Affichage des résultats
print("\nSomme des nombres saisis :", somme)
print("Vous avez saisi", nombreTotal + 1, "nombre(s) en tout, dont", nombreGrands, "nombre(s) supérieur(s) à 100")
