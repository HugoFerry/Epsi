from tkinter import *
import tkinter.filedialog


def newGame():
    return false

def loadGame():
    return false

def saveGame():
    return false

    
def mainWindow():
    fenetre = Tk()

    menubar = Menu(fenetre)
    fenetre.config(menu = menubar)
    newGame = Menu(menubar, tearoff = 0)
    menubar.add_command(label = "New game", command = newGame)
    menubar.add_command(label = "load game", command = loadGame)
    menubar.add_command(label = "save game", command = saveGame)

    fenetre.mainloop()
    
mainWindow()