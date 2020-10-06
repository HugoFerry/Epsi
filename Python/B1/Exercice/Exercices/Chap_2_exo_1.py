# Affichage d'une table d'opération d'un entier.
# L'utilisateur choisira :
#   - s'il veut afficher une table d'addition ou de multiplication
#   - le nombre entier dont il veut voir affichée la table
#   - le nombre de lignes affichées par cette table.
# Auteur : Jean-Charles DUCHEIN
# Version : 2 février 2020


# Définition de fonctions :

# La fonction add retourne la somme de deux nombres en paramètres :
def add(a, b):
	return a + b

# La fonction mult retourne le produit de deux nombres en paramètres :
def multiply(a, b):
	return a * b

# Définition de la fonction table qui affiche une table d'opération, selon 4 paramètres :
#  - base est l'entier dont on veut afficher la table
#  - length est l'entier égal au nombre de lignes affichées par la table
#  - op permet d'appeler la fonction add ou la fonction mult
#  - symbol est le caractère correspondant à l'opération désignée par op
def table(base, length, op, symbol):
	n = 0
	while n < length:
		print(n, symbol, base, '=', op(n, base))
		n += 1


# Saisie des choix de l'utilisateur : op (qui doit être 'add' ou 'mult') et les entiers base et length :
print("\nCe programme affiche une table d'opération : addition ou multiplication.\n")
print("Si vous voulez une table d'addition, saisissez : add")
print("Si vous voulez une table de multiplication, saisissez : mult")
op = input('Tapez add ou mult : ')
while op != 'add' and op != 'mult':
	print('Réponse incorrecte.')
	op = input('Tapez add ou mult :')
base = int(input('\nSaisissez le nombre entier dont vous voulez connaitre la table : '))
length = int(input('\nSaisissez le nombre de lignes affichées par la table : '))
print('')

# Appel de la fonction table :
if op == 'add':
	table(base, length, add, '+')
else:
	table(base, length, multiply, 'x')
