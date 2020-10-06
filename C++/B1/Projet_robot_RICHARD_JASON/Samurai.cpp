#include "Samurai.hpp"

using namespace std;


Samurai::Samurai(string m_name) : life(100)
{
    name = m_name;
}

Samurai::~Samurai()
{

}

void Samurai::present()
{
    cout << "Bonjour, je suis "<< name << endl;
    cout << "Je suis un samurai" << endl;
}