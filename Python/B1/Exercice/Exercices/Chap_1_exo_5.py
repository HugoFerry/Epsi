# Programme amenant l'utilisateur à deviner un nombre entier aléatoire compris entre 0 et 100.
# Auteur : Jean-Charles DUCHEIN
# Version : 12 février 2020

# Importation du module random et création d'un nombre entier aléatoire compris entre 0 et 100 :
import random
nombre_secret = random.randint(0, 100)

print('Vous devez deviner un nombre entier aléatoirement généré compris entre 0 et 100.')

# Initialisation de la variable réponse :
reponse = None

# Tant que la réponse est différente du nombre à deviner, la recherche se poursuit :
while reponse != nombre_secret:

	# Saisie de la réponse de l'utilisateur :
	reponse = int(input('Saisissez un nombre entier entre 0 et 100 :\n'))

	# Si la réponse de l'utilisateur est différente du nombre à deviner, on lui donne un indice :
	if reponse > nombre_secret:
		print('Le nombre à deviner est plus petit.\n')
	elif reponse < nombre_secret:
		print('Le nombre à deviner est plus grand.\n')

# Si on sort de la boucle while, le nombre est deviné :
print('\nGagné !')
