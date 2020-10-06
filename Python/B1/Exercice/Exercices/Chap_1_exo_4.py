# Programme affichant la liste des diviseurs d’un entier strictement positif
# saisi par l’utilisateur, et le nombre de ces diviseurs.
# Auteur : Jean-Charles DUCHEIN
# Version : 2 février 2020

# Saisie d’un entier n strictement positif :
n = int(input("Saississez un entier strictement positif : "))
while n < 1:
    n = int(input("Saisissez un entier STRICTEMENT POSITIF, s.v.p. : "))

# Initialisation de variables :
i = 1            # plus petit diviseur de n
cpt = 0          # compteur des diviseurs de n
p = int(n/2)     # plus grand diviseur possible de n (autre que n)

# Calcul et affichage de la liste des diviseurs (autres que l'entier n),
# et calcul du nombre de ces diviseurs :
print("Diviseurs de", n, ": ", end=' ')
while i <= p :
    if n % i == 0:
        cpt += 1
        print(i, ',', end=' ')
    i += 1

# Affichage du dernier diviseur (n), calcul final et affichage du nombre de diviseurs :
print(n, " (soit", cpt + 1, "diviseur(s)).")
