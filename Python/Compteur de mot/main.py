
# Ouverture du fichier texte
text = open("EPSI//Cours 4//The Life and Death of Richard the Third.txt").read().lower()
# Liste de caractère a retirer
ban_car = ''',."&()!?;:%*}{[]<>'''
# Elimination des caractères
for bc in ban_car:
    text = text.replace(bc," ")

# Création d'une liste contenant tous les mots du fichier
L_text = text.split()

# Création du dictionnaire contenant Mot : Itération
List_word = {}
for word in L_text:
    if word in List_word:
        List_word[word] += 1
    else:
        List_word[word] = 1

# Initialisation des listes et compteurs
L_word, word_max = [], 0
L_word_5, word_max_5 = [], 0

# Itération max 
for word, count in List_word.items():
    # Pour tous les mots
    if word_max < count:
        word_max = count

    # Pour les mots de plus de 5 lettres
    if len(word) >= 5 and word_max_5 < count:
        word_max_5 = count

# Sélection dans une liste des mots ayant un compteur = Itération max
for word, count in List_word.items():
    # Pour tous les mots
    if count == word_max:
        L_word.append(word)
    # Pour les mots de plus de 5 lettres
    if count == word_max_5:
        L_word_5.append(word)

# Affichage des résultats
print(f'''\nLa liste des mots les plus utilisés est : {L_word} \nIls apparaissent {word_max} fois.''')
print(f'''\nLa liste des mots de plus de 5 lettres les plus utilisés est : {L_word_5} \nIls apparaissent {word_max_5} fois.''')
