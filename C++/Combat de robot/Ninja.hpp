class Ninja : public Characters
{
    public:

        Ninja(string m_name);
        ~Ninja();
        void present();

    private:

        int life;
        string name;
};