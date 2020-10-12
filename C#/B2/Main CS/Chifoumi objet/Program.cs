using System;

namespace Chifoumi
{
    class Program
    {
        static void Main(string[] args)
        {
            Joueur[] joueurs = { new Joueur("Vous"), new Joueur("IA") };
            Choix[] choix = { new Choix("Pierre", 0), new Choix("Papier", 1), new Choix("Ciseaux", 2) };
            Arbitre arbitre = new Arbitre(joueurs[0], joueurs[1]);
            var hasard = new Random();

            do
            {
                Console.Write("1) Pierre, 2) Papier, 3) Ciseaux ?");

                var j1 = int.Parse(Console.ReadLine()) - 1;
                var j2 = hasard.Next(choix.Length);
                var gagnant = arbitre.Enregistrer(choix[j1], choix[j2]);

                Console.WriteLine(gagnant == null
                    ? "L'IA a joué la même chose : match nul"
                    : $"L'IA a joué {choix[j2].Libelle}. Vainqueur : {gagnant.Nom}."
                );
            }
            while (!arbitre.Fini);
            Console.WriteLine($"Vainqueur de la partie : {arbitre.Vainqueur.Nom}");
        }        
    }
}
