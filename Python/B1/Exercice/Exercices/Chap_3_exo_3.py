
def valide(saisie):
	if saisie == '':
		return False
	for x in saisie:
		if x not in 'atgc':
			return False

def comptage(chaine, sequence):
	compte = 0
	c = len(chaine)
	s = len(sequence)
	for i in range(c-s+1):
		if sequence == chaine[i:i+s]:
			compte += 1
	return compte

chaine = input('Saisissez une chaine ADN : ')
while valide(chaine) == False:
	print('Saisie incorrecte !')
	chaine = input('Saisissez une chaine ADN : ')

sequence = input('Saisissez une séquence ADN : ')
while valide(sequence) == False:
	print('Saisie incorrecte !')
	sequence = input('Saisissez une séquence ADN : ')

n = comptage(chaine, sequence)
print('\nChaine ADN :', chaine)
print('Séquence ADN :', sequence)
print('La séquence ADN apparait', n, 'fois dans la chaine ADN.')
