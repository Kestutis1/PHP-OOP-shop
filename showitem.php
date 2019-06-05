<?php
include("includes/header.php");
include("includes/dbh.php");
include("includes/preke.php");
include("includes/preSpalvos.php");
include("includes/preDydis.php");
include("includes/preKiekis.php");

$display_block = "<h1>Prekės aprašymas</h1>";

echo "<section><article><div class = 'flex-container'>
          <div class = 'preke'><div class = 'centre'>"
          .$display_block;

// IDEA: Pateikiama prekė pagal id.
        if (isset($_GET["prekes_id"])) {
          $pre_id = $_GET["prekes_id"];
          $prek_id = $_GET["prekes_id"];
          $objectasPRE = new PREatvaiz($pre_id);
          $objectasPRE->prekesAtvaizdavimas($pre_id);
          $objektasSpal = new Spalvu($prek_id);
          echo $objektasSpal->spalvos($prek_id);
          $objektasDydis = new predydis($prek_id);
          $objektasDydis->dydis($prek_id);
          $objektasKiekis = new prekiekis($prek_id);
          $objektasKiekis->kiekis($pre_id);
        } else {
            header("Location: index.php");
        }

echo "</div></div></div>
</article></section>";

include("includes/footer.php");

 ?>
