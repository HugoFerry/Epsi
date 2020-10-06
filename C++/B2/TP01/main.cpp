#include <iostream>
#include <regex>
using namespace std;
 
int main() {
    string age;
 	regex integer("(\\+|-)?[[:digit:]]+");
    cout << "Indique ton age : ";
    cin >> age;
    while (!(regex_match(age,integer)))
    {
        cin.clear();
        cin.ignore(1000, '\n');
        cout << "Tu n'as pas rentre un age valide ! (uniquement en chiffre) \nIndique ton age : ";
        cin >> age;
    }
    cout << "Tu as " << age << " ans." << endl;
}
