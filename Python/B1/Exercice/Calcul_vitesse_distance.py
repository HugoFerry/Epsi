def temps(distance, vitesse):
    stock = distance / vitesse
    heure, minute = divmod(stock, 1)
    heure += 9
    minute *= 60
    return int(heure), int(minute)
    
def heure(vitesseMin, vitesseMax, distance):
    for vitesse in range(vitesseMin, vitesseMax, 10):
        heure, minute = temps(distance, vitesse)
        print(f'''Le train arrive a {heure}H {minute} !''')
        
print("Vous devez saisir la plage de vitesse moyenne !")
vitesseMin = int(input("Vitesse minimum : "))
vitesseMax = int(input("Vitesse maximum : "))
distance = int(input("Quelle est la distance qui vous separe du train (en km/h) ? : "))
heure(vitesseMin, vitesseMax, distance)