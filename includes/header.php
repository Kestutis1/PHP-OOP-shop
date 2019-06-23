<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Internetinė parduotuvė</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Ši parduotuvė niekuom neprekiauja ji tik pavyzdys. Joje pavaizduotos prekės yra netikros">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <!-- <link href="https://fonts.googleapis.com/css?family=Staatliches" rel="stylesheet"> -->
        <link rel="stylesheet" href="http://localhost/PHP-OOP-shop/css/normalize.css">
        <link rel="stylesheet" href="http://localhost/PHP-OOP-shop/css/master.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    </head>
  <body>
<header>
  <div class="virsus">
      <nav>
          <ul>
            <li><a href="index.php">Pradžia</a></li>
            <li><a href="atsiliepimai">Pirkėjų atsiliepimai</a></li>
            <li><a href="kontaktai">Kontaktai</a></li>

        <?php
            // $kiekis = 0;
            //
            // // IDEA: Pasirašau skriptą jaigu vartotojas neprisijungęs.
            //
            // $login = "<li class='floatR material-icons'><a href='krepselis.php'>add_shopping_cart</a></li>
            //         <li class='prisijungimas'><a href='signup'>Registruotis</a></li>
            //         <li class='prisijungimas'><a href='login'>Prisijungti</a></li>";
            //
            //
            // if(isset($_SESSION['kiekis'])) {
            //     $kiekis = $_SESSION['kiekis'];
            //     if ($kiekis > 0) {
            //       $login = "<li class='prisijungimas kiekis'><a href='krepselis.php'>$kiekis</a></li>
            //                <li class='floatR material-icons'><a href='krepselis.php'>add_shopping_cart</a></li>
            //                <li class='prisijungimas'><a href='signup'>Registruotis</a></li>
            //                <li class='prisijungimas'><a href='login'>Prisijungti</a></li>";
            //     }
            //   }
            //
            // // IDEA: Jaigu prisijungęs atspausdinam vartotojo vardą ir statusą, kad prisijungęs.
            // if (isset($_SESSION['u_id'])) {
            //    $vardas = $_SESSION['u_uid'];
            //    $login = "<li class='prisijungimas'><a href='logout.php?logout=logout'>Atsijungti</a></li>
            //    <li class='prisijungimas'>Prisijugęs</li><li class='prisijungimas'>$vardas</li>";
            // }
            //
            // echo $login; ?>

          </ul>
        </nav>
  </div class="flout_fix"></div>
</header>
