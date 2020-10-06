
data = []
rep = None
while rep != 'stop':
	rep = input('Saisissez une couleur que vous aimez (stop pour arrêter) : ')
	if rep != 'stop':
		data.append(rep)
print('\nLes couleurs que vous aimez sont :')
for k in data :
	print(k)
