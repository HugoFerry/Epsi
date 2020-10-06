using System;

class cours01
{
    static public void Main(string[] args)
    {

        var min = 0;
        var max = 100;
        var proposition = 50;
        var reponse = "";
        var trouve = false;

        Console.WriteLine("Pensez a un nombre entre 0 et 100, je le trouve en 7 essais ou moins.");

        while (!trouve)
        {

            Console.WriteLine($"Est-ce {proposition} (=), en dessous (<) ou au dessus (>) ?");
            reponse = Console.ReadLine();

            if (reponse == ">")
            {
                proposition = (proposition + max) / 2;
            }

            else if (reponse == "<")
            {
                max = proposition;
                proposition = proposition / 2;
            }

            else if (reponse == "=")
            {
                trouve = true;
                Console.WriteLine("Je suis trop fort");
            }

            else
            {
                Console.WriteLine("je n'ai pas compris");
            }
        }
    }
}