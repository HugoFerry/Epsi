def sapin(lignes, caract):
	for n in range(lignes):
		esp = ' ' * (lignes - n - 1)
		print(esp, caract * (2 * n + 1), esp)

n = int(input('Saisissez le nombre de lignes du sapin : '))
c = input('Saisissez le caractère utilisé pour dessiner le sapin : ')
sapin(n, c)
