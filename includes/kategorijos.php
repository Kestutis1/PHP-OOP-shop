<?php

  class Kat extends Dbh {

      public function kategorijos() {
        $stmt = $this->connect()->query("SELECT id, kat_pavadinimas, kat_aprašymas FROM
                      prekiu_kategorijos ORDER BY kat_pavadinimas");
        // IDEA: Kodo eilutė apačioje negražintų tuščių stulpelių
        if ($stmt->rowCount() < 0) {
              $parodyk_kategorijas = "<p>Atsiprašome nėra kategorijų peržiūrėti</p><br />";
        } else {
          while($cats = $stmt->fetch()) {
            $cat_id = $cats['id'];
            $cat_title = strtoupper(stripslashes($cats['kat_pavadinimas']));
            $cat_desc = stripslashes($cats['kat_aprašymas']);
            $parodyk_kategorijas = "<p><strong><a href=\"".$_SERVER["PHP_SELF"].
            "?cat_id=".$cat_id."\">".$cat_title."</a></strong><br />"
            .$cat_desc."</p><br />";
            echo $parodyk_kategorijas;
            }
          }
        }
      }


// IDEA: Klasė skirta prekių atvaizdavimui.

class Pre extends Dbh {

  // public $cat_id;

    public function __construct($cat_id) {
      $this->cat_id = $cat_id;
    }

    public function prekesPavadinimas() {

      $stmt = $this->connect()->query("SELECT id, kat_pavadinimas, kat_aprašymas FROM
                    prekiu_kategorijos ORDER BY kat_pavadinimas");

      // IDEA: Kodo eilutė apačioje negražintų tuščių stulpelių
      // if ($stmt->fetchColumn() < 0) {

      if ($stmt->rowCount() < 0) {
            $parodyk_kategorijas = "<p>Atsiprašome nėra kategorijų peržiūrėti</p><br />";
      } else {
        while($cats = $stmt->fetch()) {
          $cat_id = $cats['id'];
          $cat_title = strtoupper(stripslashes($cats['kat_pavadinimas']));
          $cat_desc = stripslashes($cats['kat_aprašymas']);
          $parodyk_kategorijas = "<p><strong><a href=\"".$_SERVER["PHP_SELF"].
          "?cat_id=".$cat_id."\">".$cat_title."</a></strong><br />"
          .$cat_desc."</p><br />";
          echo $parodyk_kategorijas;

      $stmt =$this->connect()->prepare("SELECT id, prekės_pavadinimas, prekės_kaina FROM  prekes WHERE kat_id =? ORDER BY prekės_pavadinimas");
      $stmt->execute([$this->cat_id]);

      if ($stmt->rowCount() < 1) {
          echo "<p>Atsiprašome nėra prekių šioje kategorijoje</p><br />";
        } else {
           while ($row = $stmt->fetch()) {
             $item_id = $row['id'];
              echo "<a href=\"showitem.php?prekes_id=".$item_id."\">".$row['prekės_pavadinimas']."</a>  €";
              echo $row['prekės_kaina']."<br />";
              }
           }
    }
}
}
}
