<?php

class predydis extends Dbh {

  public function __construckt($prek_id){
    $this->pre_id = $pre_id;
  }

  public function dydis($pre_id){
    $prekesDydis = "a";
    $this->pre_id = $pre_id;
    $stmt = $this->connect()->prepare("SELECT prekės_dydis FROM prekiu_dydis WHERE
                    prekės_id = ? ORDER BY prekės_dydis");
    $stmt->execute([$this->pre_id]);

    // IDEA: Jai radom dydžių
    if($stmt->rowCount() > 0) {
    echo "<p>Galimi dydžai:</p><select name=\"sel_item_size\">";
    while($row=$stmt->fetch())
        $prekesDydis = $row['prekės_dydis'];
        echo "<option value=\" ".$prekesDydis."\">".
        $prekesDydis."</option></select></p>";
        }
  }
}

 ?>
