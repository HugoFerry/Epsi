#include <iostream>
#include <algorithm>
#include <vector>

using namespace std;

int main() {
    float note = 0;
    vector <float> notes{};
    int inf = 0;
    int moyenne = 0;

    do
    {
        cout << "Entrez votre note :";
        cin >> note;
        if(note >= 0){
            notes.push_back(note);
        }
    }while (note >= 0);

    sort(notes.begin(), notes.end());

    for (int i : notes)
    {
        if(i < 10){
            inf++;
        }
        moyenne += i;
    }
    
    moyenne /= notes.size();

    cout << "moyenne : " << moyenne << endl;
    cout << "notes : ";
    for (int i: notes)
    {
        cout << i << ", "; 
    }
    cout <<"\n";
    cout << "Nombre de note en dessous de 10 : " << inf << endl;
        
    return 0;
}