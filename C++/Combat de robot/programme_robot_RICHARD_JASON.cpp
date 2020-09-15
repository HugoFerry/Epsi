#include <iostream>
#include <string>
#include <cstdlib>        
#include <conio.h> 

#include "Characters.cpp"
#include "Ninja.cpp"
#include "Samurai.cpp"

using namespace std;


int main()
{

    Ninja f231("Hatsumi Masaaki");
    Samurai f232("Musashi Miyamoto");

    f231.present();
    f232.present();

    while (f231.isAlive() == true && f232.isAlive() == true) { // While f231 AND f232 is alive then...*
    static int round = 0;  // Initialisation of round 
        if (round & 1) // If round is odd 
        {
            if (f231.getLife() > 10)
            {
                f231.attack(f232);
                cout << "Hatsumi Masaaki attaque Musashi Miyamoto, Musashi Miyamoto a desormais " << f232.getLife() << " pv \n" << endl; 
                cout << "-------------------------------------------- \n" << endl; 
            }
             
            else
            {
                f231.repareHimself(50);
                cout << "Hatsumi Masaaki se soigne, il est desormais a " << f231.getLife() << " pv \n" << endl; 
                cout << "-------------------------------------------- \n" << endl; 
            }
        }

        else // else if round is peer
        {
            if (f232.getLife() > 10)
            {
                f232.attack(f231);
                cout << "Musashi Miyamoto attaque Hatsumi Masaaki, Hatsumi Masaaki a desormais " << f231.getLife() << " pv \n" << endl; 
                cout << "-------------------------------------------- \n" << endl; 
            }
             
            else
            {
                f232.repareHimself(50);
                cout << "Musashi Miyamoto se soigne, il est desormais a " << f232.getLife() << " pv \n" << endl; 
                cout << "-------------------------------------------- \n" << endl; 
            }
        }

        round ++;
    }

    if (f231.getLife() > f232.getLife())
    {
        cout << " " << endl;
        cout << "-------------------------------------------- \n" << endl; 
        cout << " " << endl;
        cout << "Hatsumi Masaaki remporte le match a mort avec " << f231.getLife() << " pv !" << endl;
        cout << " " << endl;
    }

    else if (f232.getLife() > f231.getLife())
    {
        cout << " " << endl;
        cout << "-------------------------------" << endl;
        cout << " " << endl;
        cout << "Musashi Miyamoto remporte le match a mort avec " << f232.getLife() << " pv !" << endl;
        cout << " " << endl;
    }
    
    system("TIMEOUT /T 5");
    return 0;
}
