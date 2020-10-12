using System.Linq;

namespace Chifoumi
{
    class Arbitre
    {
        private int[] scores = { 0, 0 };
        private Joueur[] joueurs;

        public Arbitre(Joueur j1, Joueur j2)
            => joueurs = new Joueur[] { null, j1, j2 };
        
        public Joueur Enregistrer(Choix choixJ1, Choix choixJ2)
        {
            var resultat = choixJ1.Affronter(choixJ2);

            if (resultat > 0)
            {
                scores[resultat - 1]++;
            }
            return joueurs[resultat];
        }
                            
        public bool Fini 
            => scores.Max() >= 3;

        public Joueur Vainqueur 
            => scores[0] < scores[1] ? joueurs[2] : joueurs[1];
    }
}
