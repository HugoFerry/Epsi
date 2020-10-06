#include "Characters.hpp"

using namespace std;

Characters::Characters() : life(100)
{

}

Characters::~Characters()
{

}

void Characters::receiveDamage(int nbDamage)
{
    life -= nbDamage;

    if (life < 0)
    {
        life = 0;
    }
}

void Characters::attack(Characters &cible)
{
    cible.receiveDamage(rand() % 20 + 1);
}

void Characters::repareHimself(int repareLife)
{
    life += repareLife;

    if (life > 100)
    {
        life = 100;
    }
}

bool Characters::isAlive()
{
    if (life > 0)
    {
        return true;
    }
    else
    {
        return false;
    }
}

int Characters::getLife()
{
    return life;
}