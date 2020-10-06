from tkinter import * # import all of tkinter
from random import randrange # import randrange of random

class gameplay: # create class
    
    def affichePion(lg,cl): # create function
        x = (cl-1) * 60 + 30 
        y = (lg-1) * 60 + 30 
        can.selObject = can.find_closest(x, y) # return the item closet to  the given position
        if gameBoard[lg][cl] == 1: # if line and columns of list egal of 1
            can.itemconfig(can.selObject, fill = "white", outline = "black") # change color
        else:
            can.itemconfig(can.selObject, fill = "black", outline = "black") # change color    
        
    def traceGrille(): # create function
        global gameBoard # return content of variable
        for lg in range(1,9): # line beetween 1 and 9
            for cl in range(1,9): # columns beetween 1 and 9
                if gameBoard[lg][cl] > 0: # if line and columns of list is superior of 0
                    gameplay.affichePion(lg,cl) # Appel la fonction affichePion dans la class gameplay              
        gameplay.comptePions() # Appel la fonction comptePions dans la class gameplay   
    
    def initGame(): # create function
        global gameBoard # return content of variable
        gameBoard = [] # create liste
        for i in range(11): 
            gameBoard.append([9]*10) # add at the end of list
        for y in range(1,9):
            for x in range(1,9): 
                gameBoard[y][x] = 0 # set 0 to y and x beetween 1 and 9
        gameBoard[4][4] = 1 # set 1 for y4 and x4
        gameBoard[4][5] = 2 # set 2 for y4 and x5
        gameBoard[5][4] = 2 # set 2 for y5 and x4
        gameBoard[5][5] = 1 # set 1 for y5 and x5
        can.delete(ALL) # remove all items
        y = 1 # set at 1
        for lg in range(1,9):
            x = 1 # set at 1
            for cl in range(1,9):
                can.create_rectangle(x, y, x + 59, y + 59) # create rectangle
                can.create_oval(x + 5, y + 5, x + 53, y + 53, fill = "#009000", outline = "#009000") # create oval 
                x += 60 # x = x + 60
            y += 60 # y = y + 60
        gameplay.traceGrille() # call function of class gameplay
    
    def newGame(): # Cree une fonction
        gameplay.initGame() # call function of class gameplay
        gameplay.traceGrille() # call function of class gameplay
        jr = randrange(2)+1
        if jr == 2:
            gameplay.tourOrdi() # call function of class gameplay
            
    def comptePions(): # Cree une fonction
        global white,black,rest # return content of variable
        white,black = 0,0 # set variable at 0
        for lg in range(1,9):
            for cl in range(1,9):
                if gameBoard[lg][cl] == 1:
                    white += 1 # 
                elif gameBoard[lg][cl] == 2:
                    black += 1
        rest = 64 - white - black # 
        nbb.configure(text = ("White : " + str(white)))
        nbn.configure(text = ("Black : " + str(black)))
        nbr.configure(text = ("Rest : " + str(rest)))
    
    def testFin(): # Cree une fonction
        end = 0
        if rest == 0 or white == 0 or black == 0 or npa == 2:
            end = 1             
        return end

    def finJeu(): # Cree une fonction
        if white > black:
            ms = "Bravo, vous avez gagné!" # set message
        elif black > white:
            ms = "Désolé, vous avez perdu!" # set message
        else:
            ms = "Match nul" # set message
        msg = Toplevel() # stock message 
        msg.configure(background = "green") # set backgroung color
        Message(msg, width = 200, font = "Arial 12", text = ms).pack(padx = 10, pady = 10) # display message

# 
# In collaboration with Gregoire & Alexis
# Need integration for futur commit
# Remplace mouseClic()
# 

    # def mouseClic(event):                                      # Fonction de clic souris
    #     global tour, nbpasse, current_player,same_color, MouseX, MouseY

    #     same_color = 0                                         # Réinitialisation à 0

    #     # Calcul de la position de la souris dans le plateau
    #     MouseY, MouseX = int(event.y/((480/tabsize)))+1, int(event.x/((480/tabsize)))+1

    #     current_player = (tour % nb_joueur)                    # Mise à jour du joueur actuel

    #     if current_player not in ia:                           # Si le joueur n'est pas un ordi
    #         if tabjeu[MouseY][MouseX] == -2:                   # Si la case cliquée est valide

    #             checkValid(True)                               # On retourne les pions
    #             if same_color == 1:                            # Si on a retouné des pions

    #                 tabjeu[MouseY][MouseX] = current_player    # On retoune aussi la case cliquée
    #                 affichePion(MouseY,MouseX)                 # Mise à jour de l'affichage
    #                 comptePions()                              # et du nombre de pion
    #                 traceGrille()                              # ainsi que du plateaun entier

    #                 tour += 1                                  # On avance d'un tour
    #                 checkValid()                               # Vérification des coups valides du koueur suivant
    #                 playing()                                  # Mise à jour du joueur actuel

    #                 if testFin():                              # Vérification de fin de partie
    #                     finJeu()
    #                     nouveauJeu()
    #                 else:
    #                     nbpasse = 0                            # Reset du nombre de joueur ayant passé à la suite

    #                     if current_player in ia:               # Si le joueur suivant est un ordi
    #                         bp.pack_forget()                   # On cache le bouton "Passer" car automatique si aucun coup valide
    #                         grid.after(2000, tourOrdi)         # Timer pour la lisibilité de jeu
    
    def mouseClic(event): # Cree une fonction
        " Gestion du clic de la souris "
        global npa,jr # return content of variable
        ty, tx = int(event.y/59)+1, int(event.x/59)+1 # event split by window size (59)
        b = 0
        if gameBoard[ty][tx] > 0:
            mess.configure(text = ("Coup non valide")) # display message
        else: # check all direction
            if gameBoard[ty][tx+1] == 2:               # à droite
                nx = tx+1
                while gameBoard[ty][nx] == 2:
                    nx += 1
                if gameBoard[ty][nx] == 1:
                    b = 1
                    nx = tx+1
                    while gameBoard[ty][nx] == 2:
                        gameBoard[ty][nx] = 1
                        gameplay.affichePion(ty,nx)
                        nx += 1    
            if gameBoard[ty+1][tx+1] == 2:           # à droite, en bas
                ny, nx = ty+1, tx+1
                while gameBoard[ny][nx] == 2:
                    ny += 1
                    nx += 1
                if gameBoard[ny][nx] == 1:
                    b = 1
                    ny, nx = ty+1, tx+1
                    while gameBoard[ny][nx] == 2:
                        gameBoard[ny][nx] = 1
                        gameplay.affichePion(ny,nx)
                        ny += 1
                        nx += 1
                if gameBoard[ty+1][tx] == 2:             # en bas
                    ny = ty+1
                while gameBoard[ny][tx] == 2:
                    ny += 1
                if gameBoard[ny][tx] == 1:
                    b = 1
                    ny = ty+1
                    while gameBoard[ny][tx] == 2:
                        gameBoard[ny][tx] = 1
                        gameplay.affichePion(ny,tx)
                        ny += 1
            if gameBoard[ty+1][tx-1] == 2:           # en bas, à gauche
                ny, nx = ty+1, tx-1
                while gameBoard[ny][nx] == 2:
                    ny += 1
                    nx -= 1
                if gameBoard[ny][nx] == 1:
                    b = 1
                    ny, nx = ty+1, tx-1
                    while gameBoard[ny][nx] == 2:
                        gameBoard[ny][nx] = 1
                        gameplay.affichePion(ny,nx)
                        ny += 1
                        nx -= 1                       
            if gameBoard[ty][tx-1] == 2:             # à gauche
                nx = tx-1
                while gameBoard[ty][nx] == 2:
                    nx -= 1
                if gameBoard[ty][nx] == 1:
                    b = 1
                    nx = tx-1
                    while gameBoard[ty][nx] == 2: 
                        gameBoard[ty][nx] = 1
                        gameplay.affichePion(ty,nx)
                        nx -= 1
            if gameBoard[ty-1][tx-1] == 2:           # à gauche, en haut
                ny, nx = ty-1, tx-1
                while gameBoard[ny][nx] == 2:
                    ny -= 1
                    nx -= 1
                if gameBoard[ny][nx] == 1:
                    b = 1
                    ny, nx = ty-1, tx-1
                    while gameBoard[ny][nx] == 2:
                        gameBoard[ny][nx] = 1
                        gameplay.affichePion(ny,nx)
                        ny -= 1
                        nx -= 1
            if gameBoard[ty-1][tx] == 2:             # en haut
                ny = ty-1
                while gameBoard[ny][tx] == 2:
                    ny -= 1
                if gameBoard[ny][tx] == 1:
                    b = 1
                    ny = ty-1
                    while gameBoard[ny][tx] == 2:
                        gameBoard[ny][tx] = 1
                        gameplay.affichePion(ny,tx)
                        ny -= 1    
            if gameBoard[ty-1][tx+1] == 2:           # en haut, à droite
                ny, nx = ty-1, tx+1
                while gameBoard[ny][nx] == 2:
                    ny -= 1
                    nx += 1
                if gameBoard[ny][nx] == 1:
                    b = 1
                    ny, nx = ty-1, tx+1
                    while gameBoard[ny][nx] == 2:
                        gameBoard[ny][nx] = 1
                        gameplay.affichePion(ny,nx)
                        ny -= 1
                        nx += 1                
            if b == 0:
                mess.configure(text = ("Coup non valide"))
            else:
                gameBoard[ty][tx] = 1
                gameplay.affichePion(ty,tx) # call function of class gameplay
                gameplay.comptePions() # call function of class gameplay
                f = gameplay.testFin() # set call function of class gameplay in variable
                if f == 1:
                    gameplay.finJeu() # call function of class gameplay
                else:
                    npa = 0
                    gameplay.tourOrdi() # call function of class gameplay
                    
    def testFin(): # Cree une fonction
        end = 0
        if rest == 0 or white == 0 or black == 0 or npa == 2:
            end = 1             
        return end
                        
    def finJeu(): # Cree une fonction
        if white > black: # Si le nombre de blanc est superieur au nombre de noir 
            ms = "Bravo, vous avez gagné!"
        elif black > white: # Si le nombre de noir est superieur au nombre de blanc 
            ms = "Désolé, vous avez perdu!"
        else: # Sinon si il y a egalite
            ms = "Match nul!!!"
        msg = Toplevel() # Stock dans une variable l'ouverture d'une nouvelle fenetre
        msg.configure(background = "green") # Met le fond en vert
        Message(msg, width = 200, font ="Arial 12", text = ms).pack(padx = 10, pady = 10) # Ouvre une nouvelle fenetre avec des parametres et un message
                    
class feature: # Cree une classe
    
    def newGame(): # Cree une fonction
        msg = Toplevel() # Stock dans une variable l'ouverture d'une nouvelle fenetre
        Message(msg, bg = "green", fg = "ivory", width = 480, font = "Arial 12", text = "Non disponible\n").pack(padx =10, pady =10) # Ouvre une nouvelle fenetre avec des parametres et un message
            
    def loadGame(): # Cree une fonction
        msg = Toplevel() # Stock dans une variable l'ouverture d'une nouvelle fenetre
        Message(msg, bg = "green", fg = "ivory", width = 480, font = "Arial 12", text = "Non disponible\n").pack(padx =10, pady =10) # Ouvre une nouvelle fenetre avec des parametres et un message
        
    def saveGame(): # Cree une fonction
        msg = Toplevel() # Stock dans une variable l'ouverture d'une nouvelle fenetre
        Message(msg, bg = "green", fg = "ivory", width = 480, font = "Arial 12", text = "Non disponible\n").pack(padx =10, pady =10) # Ouvre une nouvelle fenetre avec des parametres et un message
    
    def ruleGame(): # Cree le fonction des regles
        msg = Toplevel() # Stock dans une variable l'ouverture d'une nouvelle fenetre
        Message(msg, bg = "green", fg = "ivory", width = 480, font = "Arial 12", # Ouvre une nouvelle fenetre avec des parametres et un message
            text ="Rules of game :\n\n"\
            "The game board represents a checkerboard of 64 squares, each player "\
            "has 32 chips each, each side is black on one side, "\
            "white of the other.\n"\
            "You take the chips by turning them over to your color.\n"\
            "Initially, 2 pieces of each color are arranged on the 4 boxes "\
            "of the central banks. In turn, each one places a token with the "\
            "return at least one opposing token. Your token must be placed "\
            "to surround 1 or more opposing chips.\n"\
            "A token can take simultaneously in the horizontal directions, "\
            "veritcales and diagonals.\n"\
            "The game ends when all chips are placed, or if none "\
            "player can no longer play.\n"\
            "The winner is the one with the most chips of his color "\
            "on the set.\n"\
            "\n"\
            "How to play :\n"\
            "To place a pawn, click on the boxes of your choice.")\
            .pack(padx =10, pady =10) # Parametre les marges
   
mainWindow = Tk() # Ouvre l'interface graphique
mainWindow.title('Othello / Reversi') # Change le titre de la fenetre
mainWindow.configure(background = "green") # Change la couleur du fond

can = Canvas(mainWindow, bg = "#009000", width = 476, height = 476, bd = 2, relief = SOLID) # Stock dans can les parametres du canvas
can.bind("<Button-1>", gameplay.mouseClic) # Defini la touche d'action
can.pack(padx = 5, pady = 5)  # Configure les marges

container1 = Frame(mainWindow, bd = 2, relief = SOLID, bg = "green") # Definit une frame dans un container

b1 = Button(container1, text = "New game", font = "Arial 12", width = 15, command = gameplay.newGame) # Creer un bouton
b1.pack(side = LEFT, padx = 10, pady = 5) # Parametre les marges du bouton et la position

b2 = Button(container1, text = "Load game", font = "Arial 12", width = 15, command = feature.loadGame) # Creer un bouton
b2.pack(side = LEFT, padx = 10, pady = 5) # Parametre les marges du bouton et la position

b3 = Button(container1, text = "Save game", font = "Arial 12", width = 15, command = feature.saveGame) # Creer un bouton
b3.pack(side = LEFT, padx = 10, pady = 5) # Parametre les marges du bouton et la position

b4 = Button(container1, text = "Rules", font = "Arial 12", width = 15, command = feature.ruleGame) # Creer un bouton
b4.pack(side = LEFT, padx = 10, pady = 5) # Parametre les marges du bouton et la position

container1.pack() # Marque la fin du container

container2 = Frame(mainWindow, bd = 2, relief = SOLID, bg = "green") # Definit une frame dans un container

nbb = Label(container2, text = "White : 0", width = 16, bg = "white", font = "Arial 12") # Creer un bouton
nbb.pack(side = LEFT, padx = 6, pady = 5) # Parametre les marges du bouton et la position

nbn = Label(container2, text = "Black : 0", width = 16, bg = "white", font = "Arial 12") # Creer un bouton
nbn.pack(side = LEFT, padx = 6, pady = 5) # Parametre les marges du bouton et la position

nbr = Label(container2, text = "Rest : 64", width = 16, bg = "white", font = "Arial 12") # Creer un bouton
nbr.pack(side = LEFT, padx = 6, pady = 5) # Parametre les marges du bouton et la position

container2.pack() # Marque la fin du container 

gameBoard = []    # tableau du jeu
jr,npa = 1,0

mainWindow.mainloop() # Attend une fermeture manuelle

