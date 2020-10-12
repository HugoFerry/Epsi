using System;

namespace ChifoumiObj
{

    class Game
    {

        var MenuCMD = new MenuCMD();

        static void Main(string[] args)
        {
            bool showMenu = true;
            while (showMenu)
            {
                showMenu = MainMenu();
            }
        }

        public void PlayGame()
        {
            
        }

        public void OptionMenu()
        {

        }
        
    }

    class Player
    {
        
        public Player(string playerName)
        {
            var name = playerName;
        }

    }

    class Referee
    {

        public int Score()
        {
            int score = 0;
            Get => score;
            Set => score = value;
        }

        public void Name(var refereeName)
        {
           var name = refereeName;
        }

    }

    class Turn
    {
        
        public void Round()
        {
            int round = 0, 
                maxRound = 0;
        }

    }

    class MenuCMD
    {

        public static AsciiArt()
        {
            Console.WriteLine(FiggleFonts.Ogre.Render("Chifoumi Game !"));
        }

        private static bool MainMenu()
        {
            Console.Clear();
            AsciiArt();
            Console.WriteLine("\nChoisir une option:");
            Console.WriteLine("1) Jouer");
            Console.WriteLine("2) Parametres");
            Console.WriteLine("3) Quitter");
            Console.Write("\r\nSelectionner un choix : ");
        
            switch (Console.ReadLine())
            {
                case "1":
                    PlayGame();
                    return true;
                case "2":
                    OptionMenu();
                    return true;
                case "3":
                    return false;
                default:
                    return true;
            }
        }

        
        private static bool OptionMenu()
        {
            Console.Clear();
            AsciiArt();
            Console.WriteLine("\nChoisir une option:");
            Console.WriteLine("1) Jouer");
            Console.WriteLine("2) Parametres");
            Console.WriteLine("3) Quitter");
            Console.Write("\r\nSelectionner un choix : ");
        
            switch (Console.ReadLine())
            {
                case "1":
                    PlayGame();
                    return true;
                case "2":
                    OptionMenu();
                    return true;
                case "3":
                    return false;
                default:
                    return true;
            }
        }

         public static readonly string[] AsciiLogo = //Ma signature me demander pour la modifier
        {
           @"    __________  ____  ______      __ __ ___   ____  ",
           @"   / ____/ __ \/ __ \/ ____/     / // /|__ \ / __ \ ",
           @"  / /   / / / / /_/ / __/       / // /___/ // / / / ",
           @" / /___/ /_/ / _, _/ /___      /__  __/ __// /_/ /  ",
           @" \____/\____/_/ |_/_____/        /_/ /____/\____/   ",
           @"            _____________________________           ",
           @"           |       Made by Bozoweed      |          ",
           @"           |          CORE 420           |          ",
           @"           |             For             |          ",
           @"           | ▌│█║▌║▌║ VenturaRP ║▌║▌║█│▌ |          ",
           @"           |_____________________________|          ",
        };

                public static readonly ConsoleColor[] LogoColors = //list des couleurs que peut avoir la signiature
        {
            ConsoleColor.DarkCyan,
            ConsoleColor.DarkRed,
            ConsoleColor.DarkGray,
            ConsoleColor.DarkGreen,
            ConsoleColor.DarkYellow,
            ConsoleColor.Green,
            ConsoleColor.Red,
            ConsoleColor.White,
        };
        public void DrawAsciiLogo()//pour print la signature proprement
        {
            List<string[]> list = new List<string[]>(); 
            list.Add(AsciiLogo);
            ConsoleColor color = LogoColors.ElementAt(new Random(DateTime.UtcNow.Millisecond).Next(LogoColors.Count()));
             Console.ForegroundColor = color ;
            foreach (string line in list[0])
                Console.WriteLine(line.PadLeft((Console.BufferWidth + line.Length) / 2)
         
          
        }

    }

}