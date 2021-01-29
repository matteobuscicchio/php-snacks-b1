<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>php-snacks-b1</title>
    </head>
    <body>
        <!-- 
            PHP Snack 1:
            Creiamo un array 'matches' contenente altri array 
            i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario. 
            Ogni array della partita avrà una squadra di casa e una squadra ospite, 
            punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
            Stampiamo a schermo tutte le partite con questo schema:
            Olimpia Milano - Cantù | 55 - 60 
        -->
        <?php
            $matches = [
                "week_1"=>[
                    "home" => "Milano",
                    "homePoint" => 55,
                    "guest" => "Cantù",
                    "guestPoints" => 60,
                ],
                "week_2"=>[
                    "home" => "Roma",
                    "homePoint" => 45,
                    "guest" => "Genoa",
                    "guestPoints" => 50,
                ],
                "week_3"=>[
                    "home" => "Firenze",
                    "homePoint" => 35,
                    "guest" => "Napoli",
                    "guestPoints" => 70,
                ],
            ];
            foreach ($matches as $weeks){
                $teanOne = $weeks["home"];
                $teanOnePoints = $weeks["homePoint"];
                $teanTwo =$weeks["guest"];
                $teanTwoPoints =$weeks["guestPoints"];
                echo "<p>  $teanOne - $teanTwo | $teanOnePoints - $teanTwoPoints; </p>";
            };
        ?>

        <!--
            PHP Snack 2:
            Passare come parametri GET name, mail e age e verificare 
            (cercando i metodi che non conosciamo nella documentazione) che:
            1. name sia più lungo di 3 caratteri,
            2. mail contenga un punto e una chiocciola
            3. age sia un numero.
            Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
        -->

        <form method="get">
            <input type="text" name="name" placeholder="Inserire nome">
            <input type="text" name="age" placeholder="Inserire età">
            <!-- type cambiato in text per prevenmire il check automatico dell'email -->
            <input type="text" name="mail" placeholder="Inserire e-mail">
            <input type="submit">
        </form>
        
        <p>
            <?php
                $name = $_GET['name'];
                $age = $_GET['age'];
                $mail = $_GET['mail'];

               


                echo $name;
                echo $age;
                echo $mail;
            ?>
        </p>
    </body>
</html>