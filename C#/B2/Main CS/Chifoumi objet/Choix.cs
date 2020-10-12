namespace Chifoumi
{
    class Choix
    {
        private readonly int valeur;

        public Choix(string libelleChoix, int valeurChoix)
        {
            Libelle = libelleChoix;
            valeur = valeurChoix;
        }
        public int Affronter(Choix autre)
            => (3 + valeur - autre.valeur) % 3;

        public string Libelle { get; }
    }
}
