#include <iostream>

using namespace std;

int main()
{
    int age;
    cout << "Quel age avez vous ?" << endl;
    cin >> age;

    if (age < 16 && age > 6) {
        cout << "Tu n'es pas en classe ?" << endl;
    } 
    else if (age >= 18)
    {
        cout << "Vous avez le droit de vote" << endl;
        if (age > 62)
        {
            cout << "sinon c'est bien la retraite ?" << endl;
        }
        else
        {
            return 0;
        }
    } 
    else
    {
        cout << "C'est ton papa ou ta maman qui tape sur le clavier ?" << endl;
    }
    
    return 0;
}   