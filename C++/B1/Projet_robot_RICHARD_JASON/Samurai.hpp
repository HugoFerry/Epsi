class Samurai : public Characters
{
    public:

        Samurai(string m_name);
        ~Samurai();
        void present();

    private:

        int life;
        string name;
};