using System;

namespace Exo
{
    class program
    {
        static void Main(string[] args)
        {
            var dé_1 = new Dice();
            var dé_2 = new Dice();

            dé_1.Roll;
            dé_2.Roll;

            Console.WriteLine(dé_1.GetResult());
            var res2 = dé_2.GetResult();

            Player player1 = new Player("Toto");
            Player player2 = new Player("Titi");

            Console.WriteLine($"Nom du joueur { player1.Name }");
            Console.Write("Votre nouveau nom ? ");
            player1.Name = Console.ReadLine();
            player1.Win(10);

    }
        
        class Dice
        {
            private int result;

            public Dice(int sideNumber)
            {
                sideNum = sideNumber;
                Roll();
            }

            public Dice()
            {
                sideNum = 6;
                Roll();
            }

            public void Roll()
            {
                var hasard = new Random();

                resultat = hasard.Next(1, sideNum + 1);
            }

            public int GetResult()
            {
                return result;
            }

        }

        class Player
        {
            private string name;
            private int score;

            public Player(string playerName)
            {
                name = playerName;
                score = 0;
            }

            public string Name
            {
                get 
                {
                    return name;
                }
                set
                {
                    name = value;
                }
            }

            public void Win(int points)
            {
                score += points;
            }

            public int Score => score;
        }

    }

}