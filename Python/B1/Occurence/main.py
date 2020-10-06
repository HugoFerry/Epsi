occurence = 0

def valide(saisie):
    if saisie == "":
        return False
    for x in saisie:
        if x not in "atgc":
            return False
        
chaine_adn = input("Entrer une chaine d'ADN : ")
while valide(chaine_adn) == False:
    chaine_adn = input("Entrer une chaine d'ADN : ")
    print(chaine_adn)
        
sequence = input("Quelle sequence recherchez vous ? : ")

def comptage(chaine_adn, sequence):
    occurence = chaine_adn.count(sequence)
    return occurence

print("\nLa chaine est :", chaine_adn)
print("La sequence est :", sequence)
print("La sequence apparait", comptage(chaine_adn, sequence), "fois dans la chaine")