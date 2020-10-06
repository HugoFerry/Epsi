using System;

namespace Devin
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Pensez à un nombre entre 1 et 100, je vais le deviner en moins de 7 essais");
            var debut = 1;
            var fin = 100;
            var trouvé = false;

            do
            {
                var proposition = (debut + fin) / 2;

                Console.WriteLine($"Je pense à { proposition }, est-ce <, > ou = ? ");
                string choix;

                choix = Console.ReadLine();
                if (choix == "<")
                {
                    fin = proposition - 1;
                }
                else if (choix == ">")
                {
                    debut = proposition + 1;
                }
                else if (choix == "=")
                {
                    trouvé = true;
                }
                else
                {
                    Console.Error.WriteLine("Vous devez répondre avec <, > ou =");
                }
            }
            while ( ! trouvé && debut < fin);
            if(trouvé)
            {
                Console.WriteLine("Je suis trop fort");
            }
            else if(debut == fin)
            {
                Console.WriteLine($"J'ai deviné, c'est {debut} !");
            }
            else
            {
                Console.WriteLine($"Impossible, vous m'avez menti à un moment donné.");
            }
        }
    }
}
