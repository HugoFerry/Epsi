#include <iostream>

using namespace std;

int main() 
{
    string reponse = "O";
    float nb_saisie, note_min, note_max, note_inf, note_sup, moyenne, saisie;

    while (reponse != "N") {
        cout << "Voulez vous ajouter une note - Oui (O) / Non (N)" << endl;
        cin >> reponse;
        if (reponse == "O") {
            cout << "Merci de saisir une note : ";
            cin >> saisie;
            nb_saisie++;
            moyenne += saisie;
            if (saisie > note_max)
            {
                note_max = saisie;
            } else if (saisie < note_min)
            {
                note_min = saisie;
            }
            if (saisie < 10) {
                note_inf++;
            } else if (saisie > 10)
            {
                note_sup++;
            }
        } else {
            return 0;
        }
    }

    moyenne = moyenne / nb_saisie;
    cout << "Note la plus basse : " << note_min << endl;
    cout << "Note la plus haute : " << note_max << endl;
    cout << "Nombre de note en dessous de la moyenne : " << note_inf << endl;
    cout << "Nombre de note au dessus de la moyenne : " << note_sup << endl;
    cout << "Moyenne : " << moyenne << endl;

    return 0;
}
