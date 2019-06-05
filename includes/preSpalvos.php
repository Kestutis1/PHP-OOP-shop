<?php
class Spalvu extends Dbh {

  public function __construckt($prek_id) {
    $this->prek_id = $pre_id;
  }

  public function spalvos($prek_id) {
  $this->prek_id = $prek_id;
  $stmtSpalvos = $this->connect()->prepare("SELECT prekės_spalva FROM prekiu_spalvos WHERE
                    prekės_id = ?");
  $stmtSpalvos->execute([$this->prek_id]);

    if ($stmtSpalvos->rowCount() > 0) {
          echo "<p>Galimos spalvos:</p><select name=\"sel_item_color\">";
         while ($row = $stmtSpalvos->fetch()) {
         $prekėsSpalva = $row['prekės_spalva'];
         echo "<option value=\" ".$prekėsSpalva."\">".
         $prekėsSpalva."</option></select></p>";
          }
       }
    }
  }

 ?>
