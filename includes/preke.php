<?php

class PREatvaiz extends Dbh {

  // public function __construckt($pre_id) {
  //   $this->pre_id = $pre_id;
  // }
  public function __construckt($cat_id) {
    $this->cat_id = $cat_id;
  }
    public function prekesAtvaizdavimas($cat_id) {
    $this->cat_id = $cat_id;

      $stmt = $this->connect()->prepare("SELECT c.id as kat_id, c.kat_pavadinimas, si.prekės_pavadinimas,
                    si.prekės_kaina, si.prekės_aprašymas FROM prekes
                    AS si LEFT JOIN prekiu_kategorijos AS c on c.id = si.kat_id WHERE si.id = ?");
      // $stmt = $this->connect()->prepare("SELECT prekės_pavadinimas,
      //               prekės_kaina, prekės_aprašymas FROM prekes
      //               WHERE id = ?");
      $stmt->execute([$this->cat_id]);

      if ($stmt->rowCount() < 1) {
          echo "<p>Atsiprašome nepavyko atvaizduti prekę</p><br />";
        } else {
           while ($row = $stmt->fetch()) {
             echo $row['prekės_pavadinimas']." ";
             echo $row['prekės_kaina']." € <br />";
             echo $row['prekės_aprašymas'];
           }
    }
  }
}






















 ?>
