<?php

class prekiekis extends Dbh {

  public function __construckt($prek_id){
    $this->pre_id = $pre_id;
  }

  public function kiekis($pre_id){
    $this->pre_id = $pre_id;
    echo "<p>Pasirinkite kiekį.</p>
    <select name=\"sel_item_qty\">";
    for ($i=1; $i<11 ; $i++) {
            echo"<option value=\" ".$i."\">".$i."</option>";
            // $display_block .="<option value=\" ".$i."\">".$i."</option>";
        }
    echo "</select>
    <input type=\"hidden\" name=\"sel_item_id\"
    value=\" ".$this->pre_id."\"/><br /><br />
    <input class=\"uzsakyti\" type=\"submit\" value=\"Į krepšelį\"/>
    </form>";
    }
  }
?>
