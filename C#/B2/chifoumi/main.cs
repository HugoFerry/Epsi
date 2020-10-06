using System;

class cours01
{
    enum Signs {Pierre, Feuille, Ciseaux} 
    var signs_ia, signs_palyer;
    int score_ia, score_player;
    Random number = new Random();   

    static public void Main(string[] args)
    {
        
        do
        {
            
            signs_ia = number.Next(0,3);

            Console.WriteLine("Faites votre choix : (0) Pierre - (1) Feuille - (2) Ciseaux");
            signs_player = Console.ReadLine();

            CheckWinner(signs_ia, signs_player);

        } while (score_ia == 3 || score_player == 3);
      
        if (score_ia == 3)
        {
            Console.WriteLine("L'intelligence artificielle a gagné :(");
        } else
        {
            Console.WriteLine("Vous avez gagné :)");
        }

    }

    public int CheckWinner(var signs_ia, var signs_player) 
    {
        if (signs_ia == signs_player) 
        {
            return 0;
        } else if (signs_ia != signs_player)
        {
            switch (signs_player)
            {
                case 0:
                    if (signs_ia == 3) {
                        Console.WriteLine("Vous avez gagné :)");
                        score_player ++;
                    } else 
                    {
                        Console.WriteLine("Vous avez perdu :(");
                        score_ia ++;
                    }
                case 1:
                    if (signs_ia == 0) {
                        Console.WriteLine("Vous avez gagné :)");
                        score_player ++;
                    } else 
                    {
                        Console.WriteLine("Vous avez perdu :(");
                        score_ia ++;
                    }
                case 3:
                    if (signs_ia == 2) {
                        Console.WriteLine("Vous avez gagné :)");
                        score_player ++;
                    } else 
                    {
                        Console.WriteLine("Vous avez perdu :(");
                        score_ia ++;
                    }
                default:
                    Console.WriteLine($"Je ne comprend pas ({signs_player}) - ExOODSE");
                    break;
            }
        }
    }
}
