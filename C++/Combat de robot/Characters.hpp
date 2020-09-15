

class Characters
{
    public:

        Characters();
        ~Characters();
        void receiveDamage(int nbDamage);
        void attack(Characters &cible);
        void repareHimself(int repareLife);
        bool isAlive();
        int getLife();

    private:

        int life;
};