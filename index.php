<?php
include_once("includes/header.php");
include_once("includes/dbh.php");
include("includes/kategorijos.php");

    $object = new Dbh;
    $object->connect();

    $display_block = "<h1>Prekių kategorijos</h1>
    <p>Pasirinkite kategoriją pamatytį jos prekes:</p><br />";

    echo "<section><article><div class = 'flex-container'>
            <div><h1>Parduotuvės prekių pasirinkimas
            </h1><br /><div class = 'centre'>$display_block";

   $object = new Kat;
   $object->kategorijos();

   echo "</div></div></div></article></section>";


   if (isset($_GET["cat_id"])) {
        $cat_id = $_GET["cat_id"];

        $objectas = new Pre($cat_id);
      echo $objectas->prekes();
  }

include_once("includes/footer.php");

 ?>
