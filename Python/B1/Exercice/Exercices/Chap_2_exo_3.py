# Calcul et affichage du nombre d'Euler e, avec une précision
# dépendant d'un entier naturel n saisi par l'utilisateur.
# Auteur : Jean-Charles DUCHEIN
# Version : 2 février 2020

# Définition de la fonction fact qui retourne la factorielle d'un entier naturel n :
def fact(n):
	if n == 0:
		return 1
	return fact(n - 1) * n

# Saisie de l'entier naturel n conditionnant la précision de calcul approché de e :
print("Ce programme permet de calculer une valeur approchée du nombre d'Euler e.")
print("Cette approximation sera d'autant plus précise que l'entier naturel que vous allez saisir sera grand.")
n = int(input('Saissisez un entier compris entre 10 et 20 : '))
while not 10 <= n <= 20:
	print('Saisie incorrecte')
	n = int(input('Saissisez un entier compris entre 10 et 20 : '))

# Initialisation de variables :
k, e = 0, 0.0

# Calcul d'une valeur approchée de e à l'aide de la fonction fact :
while k <= n:
	e = e + 1/fact(k)
	k += 1

# Affichage du résultat :
print ("Une valeur approchée de e est : ", e)
