from math import pi, fabs
approch = 100
for a in range(100):
	for b in range(1, 100):
		if fabs(pi - a/b) < approch:
			approch = fabs(pi - a/b)
			num = a
			den = b
print ('La fraction approchant au mieux pi est :', num, '/', den)




