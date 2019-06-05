<?php

class PREatvaiz extends Dbh {

  public function __construckt($pre_id) {
    $this->pre_id = $pre_id;
  }
    public function prekesAtvaizdavimas($pre_id) {
    $this->pre_id = $pre_id;

      $stmtImg = $this->connect()->prepare("SELECT * FROM prekiu_nuotr WHERE prekės_id = ?");
      $stmtImg->execute([$this->pre_id]);

      while ($rowImg = $stmtImg->fetch()) {
        if ($rowImg['status'] == 1) {
                $item_image = "img\prekė".$pre_id.".jpg";
        } else {
                $item_image = "img\default.png";
        }
      }



      $stmt = $this->connect()->prepare("SELECT c.id as kat_id, c.kat_pavadinimas, si.prekės_pavadinimas,
                    si.prekės_kaina, si.prekės_aprašymas FROM prekes
                    AS si LEFT JOIN prekiu_kategorijos AS c on c.id = si.kat_id WHERE si.id = ?");
      $stmt->execute([$this->pre_id]);

      if ($stmt->rowCount() < 1) {
          echo "<p>Atsiprašome nepavyko atvaizduti prekę</p><br />";
        } else {
           while ($row = $stmt->fetch()) {
             $categorija_id = $row['kat_id'];
             echo "<p><strong>Prekė priklauso kategorijai <a href=\"index.php?cat_id="
                   .$categorija_id."\">".$row['kat_pavadinimas']."</a></strong></p><br />";
             echo "<h3>".$row['prekės_pavadinimas']."</h3><br />";
             echo "<img src=".$item_image.">";
             echo "<p><strong>Prekės aprašymas:</strong><br />".$row['prekės_aprašymas']."</p>";
             echo "<p><strong>Kaina:</strong> €".$row['prekės_kaina']."</p>";
             echo "<form class=\"atvaizduoti\" method=\"post\" action=\"pridėtYkrepšelį.php\">";
           }
    }
  }
}























 ?>
