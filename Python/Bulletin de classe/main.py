note_min = int(0)
note_max = int(0)
moyenne = int(0)

saisie = input("Entrez les notes de 0 a 20 avec un espace entre chaques notes : ").split()
note = [int(k) for k in saisie]

def minmaxmoy(note):
    note_min, note_max, somme = note[0], note[0], note[0]
    for k in note[1:]:
        somme += k
        if k < note_min:
            note_min = k
        elif k > note_max:
            note_max = k
        moyenne = somme / len(note)
    
    return note_min, note_max, moyenne

note_min, note_max, moyenne = minmaxmoy(note)

print(f'''Note min : {note_min}''')
print(f'''Note max : {note_max}''')
print(f'''Moyenne : {moyenne}''')