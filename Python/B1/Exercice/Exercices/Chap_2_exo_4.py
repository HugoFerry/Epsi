# Ce programme affiche les coordonnées des points de la courbe
# représentative d'une fonction choisie par l'utilisateur (2 choix possibles).
# Les abscisses des points iront d'une valeur minimale à une valeur maximale
# selon un certain pas, ces trois paramètres étant choisis par l'utilisateur.
# Auteur : Jean-Charles DUCHEIN
# Version : 2 février 2020

# Importation de la fonction sin :
from math import sin

# Définition des deux fonctions proposées à l'utilisateur :
def fonct1(x):
	return 2*x**3 + x - 5
def fonct2(x):
	return sin(x**2 + 1)

# Définition de la fonction tabul qui affiche les coordonnées des points de la courbe, selon 4 paramètres :
#  - fonction permet d'appeler fonct1 ou fonct2
#  - abmin est l'abscisse minimale des points de la courbe
#  - abmax est l'abscisse maximale des points de la courbe
#  - pas est le pas incrémentant les abscisses des points de la courbe.
def tabul(fonction, abmin, abmax, pas):
	x = abmin
	while x <= abmax:
		print('(', x, ',', fonction(x), ')')
		x += pas

# Saisie des paramètres : choix de la fonction, abmin, abmax, pas :
print('Ce programme va afficher les coordonnées des points de la courbe représentative')
print("d'une fonction que vous choisirez parmi deux propositions :")
print('fonction 1 : f(x) = 2x^3 + x - 5')
print('fonction 2 : f(x) = sin(x^2 + 1)')
f = int(input('\nChoisissez la fonction (tapez 1 ou 2) : '))
while f != 1 and f != 2:
	print('Saisie incorrecte !')
	f = int(input('\nChoisissez la fonction (tapez 1 ou 2) : '))
abmin = float(input("\nSaissisez l'abscisse minimale des points de la courbe : "))
abmax = float(input("\nSaissisez l'abscisse maximale des points de la courbe : "))
while abmax <= abmin:
	print("L'abscisse maximale doit être supérieure à l'abscisse minimale !")
	abmax = float(input("\nSaissisez l'abscisse maximale des points de la courbe : "))
pas = float(input("\nSaissisez le pas que vous souhaitez entre la valeur min et la valeur max des abscisses : "))
while pas <= 0:
	print('Le pas doit être strictement positif !')
	pas = float(input("\nSaissisez le pas que vous souhaitez entre la valeur min et la valeur max des abscisses : "))

# Appel de la fonction tabul :
if f == 1:
	tabul(fonct1, abmin, abmax, pas)
else:
	tabul(fonct2, abmin, abmax, pas)
