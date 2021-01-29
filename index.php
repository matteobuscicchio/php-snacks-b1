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
            // metodo uno
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
            echo "<h2>Metodo Uno</h2>";
            foreach ($matches as $weeks){
                $teamOne = $weeks["home"]; $teamOnePoints = $weeks["homePoint"]; $teamTwo =$weeks["guest"]; $teamTwoPoints =$weeks["guestPoints"];
                echo "<p> $teamOne - $teamTwo | $teamOnePoints - $teamTwoPoints; </p>";
            };

            // metodo due
            $matches_n = [
                "week_1"=>[ "Milano", 55, "Cantù", 60,],
                "week_2"=>["Roma", 45, "Genoa", 50,],
                "week_3"=>["Firenze", 35, "Napoli", 70,],
            ];
            echo "<h2>Metodo Due</h2>";
            foreach ($matches_n as list($h,$h_p,$g,$g_p)){
                $home = $h; $home_Points = $h_p; $guest = $g; $guest_Points = $g_p;
                echo "<p> $home - $guest | $home_Points - $guest_Points; </p>";
            };

            // metodo tre
            $matches_n = [
                "week_1"=>[ "Milano", 55, "Cantù", 60,],
                "week_2"=>["Roma", 45, "Genoa", 50,],
                "week_3"=>["Firenze", 35, "Napoli", 70,],
            ];
            echo "<h2>Metodo Tre</h2>";
            function stampArray($matches_n){
                foreach ($matches_n as list($h,$h_p,$g,$g_p)){
                    $home = $h; $home_Points = $h_p; $guest = $g; $guest_Points = $g_p;
                    echo "<p> $home - $guest | $home_Points - $guest_Points; </p>";
                };
            };
            stampArray($matches_n);
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
        <?php

            echo "<h2>Form</h2>";

            $rawName = $_GET['name'];
            $rawAge = $_GET['age'];
            $rawMail = $_GET['mail'];

            function formRefinery($name,$age,$mail) {
                if (strlen($name) > 3 && filter_var($age, FILTER_VALIDATE_INT) && filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                    echo "accesso riuscito";
                } else {
                    echo "accesso negato";
                };
            };
        ?>

        <form method="get">
            <input type="text" name="name" placeholder="Inserire nome">
            <input type="text" name="age" placeholder="Inserire età">
            <!-- type cambiato in text per prevenmire il check automatico dell'email -->
            <input type="text" name="mail" placeholder="Inserire e-mail">
            <input type="submit">
        </form>
        
        <p> <?php formRefinery($rawName,$rawAge,$rawMail); ?> </p>
    </body>
</html>