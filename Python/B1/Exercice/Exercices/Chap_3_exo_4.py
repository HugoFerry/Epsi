
# Définition de la fonction "minmaxmoy", recevant une séquence de nombres en paramètre
# et retournant un tuple contenant le nombre mini, le nombre maxi et la moyenne de ces nombres :
def minmaxmoy(notes):
	mini, maxi, somme = notes[0], notes[0], notes[0]
	for note in notes[1:]:
		somme += note
		if note < mini:
			mini = note
		if note > maxi:
			maxi = note
	moy = somme / len(notes)
	return mini, maxi, moy

# Saisie des notes en un seul objet string, et conversion de celui-ci en une liste de mots-notes
# (sans espaces) à l'aide de la fonction split.
# La variable "saisie" référence donc une liste d'objets de type string :
saisie = input('Saisie des notes (entiers de 0 à 20 séparés par un espace) : ').split()

# Création de la varaible "notes", référençant une liste contenant les notes saisies sous forme numérique :
notes = [int(k) for k in saisie]

# Appel de la fonction "minmaxmoy" en passant la liste référencée par "notes" en paramètre
# et déballage du tuple renvoyé par "minmaxmoy" :
mini, maxi, moy = minmaxmoy(notes)

# Affichage des résultats obtenus :
print('Note min :', mini)
print('Note max :', maxi)
print('Moyenne :', moy)

