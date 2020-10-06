 
import random
nombre_secret = random.randint(0, 100)

print('Vous devez deviner un nombre entier aléatoirement généré compris entre 0 et 100.')
reponse = None
histo = []

while reponse != nombre_secret:
	reponse = int(input('Saisissez un nombre entier entre 0 et 100 :\n'))
	histo.append(reponse)
	if reponse > nombre_secret:
		print('Le nombre à deviner est plus petit.\n')
	elif reponse < nombre_secret:
		print('Le nombre à deviner est plus grand.\n')
print('\nGagné !')

print('\nVous avez gagné au bout de', len(histo), 'essais :')
for essai in histo:
    print('- ', essai)
