# Programme de recherche des racines réelles
# d'un polynôme du second degré ax^2 + bx + c
# Auteur : Jean-Charles DUCHEIN
# Version : 2 février 2020

# Importation de la fonction racine carrée
from math import sqrt

print("Recherche des racines du polynôme ax^2 + bx + c")

# Saisie des coefficients du polynôme
print("Saisissez les coefficients a, b, c (nombres entiers ou décimaux).")
a = float(input("    Saississez le coefficient a (non nul) : "))
while a == 0:
	print('a doit être non nul !')
	a = float(input("    Saississez le coefficient a (non nul) : "))
b = float(input("    Saississez le coefficient b : "))
c = float(input("    Saississez le coefficient c : "))

# Calcul du discriminant
delta = b**2 - 4 * a * c

# Test des trois cas possibles et affichage des racines du polynôme
if delta < 0:
    print("Le polynôme n'a pas de racine réelle.")
elif delta == 0:
    x = -b / (2 * a)
    print("Le polynôme a une racine réelle double :", x)
else:
    x1 = (-b - sqrt(delta)) / (2 * a)
    x2 = (-b + sqrt(delta)) / (2 * a)
    print("Le polynôme a deux racines réelles distinctes :", x1, "et", x2)