#include "Ninja.hpp"

using namespace std;


Ninja::Ninja(string m_name) : life(100)
{
    name = m_name;
}

Ninja::~Ninja()
{

}

void Ninja::present()
{
    cout << "Bonjour, je suis " << name << endl;
    cout << "Je suis un ninja" << endl;
}