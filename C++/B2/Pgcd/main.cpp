#include <iostream>

using namespace std;

int main()
{
    int a = 0;
    int b = 0;

    while (a <= 0)
    {    
        cout << "Entrer le premier nombre : ";
        cin >> a;
    }

    while (b <= 0)
    {    
        cout << "Entrer le deuxieme nombre : ";
        cin >> b;
    }

    if (a <= 3 || b <= 3) {
        cout << "Le plus grand denominateur commun est 0" << endl;
    } else if (a == b)
    {
        cout << "Le plus grand denominateur commune est " << a << endl;
    } else
    {
        a = a%b;
        cout << "Le plus grand denominateur commune est " << a << endl;
    }

    return 0;
}   

