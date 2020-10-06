using System;
using System.Linq;

namespace Chifoumi
{
    class Program
    {
        // j2 / j1:  Pierre  Papier  Ciseaux
        // Pierre :     0       1       2
        // Papier :     2       0       1
        // Ciseaux:     1       2       0

        // j1 | j2 | R | j1-j2 | 3 + j1 - j2 |

        //  0 |  0 | 0 |   0   |      3      | 
        //  1 |  0 | 1 |   1   |      4      | 
        //  2 |  0 | 2 |   2   |      5      | 

        //  0 |  1 | 2 |  -1   |      2      | 
        //  1 |  1 | 0 |   0   |      3      | 
        //  2 |  1 | 1 |   1   |      4      | 

        //  0 |  2 | 1 |  -2   |      1      | 
        //  1 |  2 | 2 |  -1   |      2      | 
        //  2 |  2 | 0 |   0   |      3      | 

        static void Main(string[] args)
        {
            string[] noms   = "Vous,IA".Split(",");
            string[] choix  = "Pierre,Papier,Ciseaux".Split(",");
            int   [] scores = { 0, 0 };
            var hasard = new Random();

            do
            {
                Console.Write("1) Pierre, 2) Papier, 3) Ciseaux ?");

                var j1 = int.Parse(Console.ReadLine()) - 1;
                var j2 = hasard.Next(3);
                var resultat = (3 + j1 - j2) % 3;

                if(resultat == 0)
                {
                    Console.WriteLine("L'IA a joué la même chose : match nul");
                }
                else
                {
                    var vainqueur = resultat - 1;

                    Console.WriteLine($"L'IA a joué {choix[j2]}. Vainqueur {noms[vainqueur]}.");
                    scores[vainqueur]++;
                }
            }
            while (scores.Max() < 3);
            Console.WriteLine(scores[0] < scores[1] ? "L'IA gagne" : "Vous gagnez");            
        }        
    }
}
