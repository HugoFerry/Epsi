lettre = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"]
nombre = ["1", "2", "3", "4", "5", "6", "7", "8", "9"]

for l1 in lettre: 
    for l2 in lettre: 
        for l3 in lettre: 
            for n1 in nombre: 
                for n2 in nombre: 
                    for n3 in nombre: 
                        print(l1 + l2 + l3 + n1 + n2 + n3)
                        
