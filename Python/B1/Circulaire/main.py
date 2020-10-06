from math import * # On importe math pour pourvoir avoir la fonction Racine carre

def premier(nombre): # On creer la fonction premier qui prend en parametre nombre
    rc_nombre = int(sqrt(nombre)+1) # On stocke la racine carre de nombre -1
    n = int(3) # On initialise n a 3 
    while n <= rc_nombre: # Tant que n est inferieur ou egal a la Racine Carre ou que le reste est different de 0
        if (nombre % n) == 0: # Si le reste du nombre divise par une racine carre -1 est egal de 0
            print("pas premier")
            return False # Retourne Faux
        n += 1 # On ajoute 1 a n
        
    print("premier")
    return True # Retourne Vrai

def circulaire(nombre): # On creer la fonction circulaire qui prend en parametre nombre
    nombre_list = [] # On cree une  liste pour stocker chaque chiffre du nombre
    nombre_circ = [] # On cree une  liste pour stocker chaque circulaire du nombre
    longueur_nombre = str(nombre) # On stock le nombre de chiffre qui compose le nombre
    
    if premier(nombre): # Si le nombre est premier, alors on test si il est circulaire

        for k in longueur_nombre: # Pour chaque chiffre dans le nombre
            nombre_list.append(k) # On ajoute le chiffre a la liste
            
        i = 0 # On initialise i a 0
        while i <= len(longueur_nombre): # Tant que i est inferieur ou egal a la longeur du nombre
            
            temp_nombre = nombre_list[-1] # On rentre dans une variable le dernier nombre de la liste
            
            nombre_list.pop(-1) # On enleve le dernier nombre de la liste
            nombre_list.insert(0,temp_nombre) # On insere le nombre temporaire au debut de la liste
            
            separator = "" # On initialise un separateur
            
            i += 1 # On ajoute 1 a i
            
            nombre_circ.append(separator.join(nombre_list)) # On insere a nombre la tous les elements de la liste list_number
            
        for k in nombre_circ: # Pour toutes les possibilités circulaire 
            if not premier(int(k)): # Si il n'est pas premier
                return("Ce nombre est un nombre premier, mais pas circulaire.") # On affiche la reponse a l'utilisateur
        return("Ce nombre est un nombre premier circulaire.") # On affiche la reponse a l'utilisateur
    
    else:
        return("Ce nombre n'est pas un nombre premier.") # On affiche la reponse a l'utilisateur
        
        
nombre = int(input("Entrer un nombre : ")) # On demandre a l'utilisateur de rentrer un nombre
print(circulaire(nombre)) # On appel la fonction premier avec le nombre en parametre
