<?php
include("includes/header.php");
include("includes/dbh.php");
include("includes/preke.php");

// IDEA: Pateikiama prekė pagal id.
        if (isset($_GET["prekes_id"])) {
          $cat_id = $_GET["prekes_id"];
          $objectasPRE = new PREatvaiz($cat_id);
          $objectasPRE->prekesAtvaizdavimas($cat_id);
        } else {
            header("Location: index.php");
        }


include("includes/footer.php");

 ?>
