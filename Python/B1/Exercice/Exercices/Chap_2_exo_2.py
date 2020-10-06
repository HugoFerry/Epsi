# Programme affichant les horaires du drame ferroviaire
# selon les différentes vitesses moyennes v du train
# Auteur : Jean-Charles DUCHEIN
# Version : 2 février 2020

# Définition de la fonction heure qui calcule et affiche l'horaire du drame
# en fonction d'une vitesse moyenne v du train :
def heure(v):
	d = int(60 * 170 / v)     # durée en minutes du trajet
	h = int(d / 60) + 9       # horaire du drame : heure
	m = d - 60 * (h - 9)      # horaire du drame : minute(s)
	print("Pour une vitesse moyenne de {} km/h, le drame aura lieu à {} h {} min".format(v, h, m))

# Affichage des horaires du drame selon les différentes vitesses moyennes v du train :
v = 100
while v <= 300:
	heure(v)
	v += 10

