<?php
include_once("includes/header.php");
include_once("includes/dbh.php");
include("includes/kategorijos.php");
include("includes/preke.php");

    $objectDBH = new Dbh;
    $objectDBH->connect();

// IDEA: Pradedu informacijos išvedimą į ekraną.
    $display_block = "<h1>Prekių kategorijos</h1>
    <p>Pasirinkite kategoriją pamatytį jos prekes:</p><br />";


    echo "<section><article><div class = 'flex-container'>
            <div><h1>Parduotuvės prekių pasirinkimas
            </h1><br /><div class = 'centre'>$display_block";

        if (isset($_GET["cat_id"])) {
            $cat_id = $_GET["cat_id"];
            $objectasPRE = new Pre($cat_id);
            echo $objectasPRE->prekesPavadinimas();

          } else {
              $objectKat = new Kat;
              $objectKat->kategorijos();
            }

   echo "</div></div></div></article></section>";

include_once("includes/footer.php");

 ?>
