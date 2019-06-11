<?php
class pasitik_preke extends Dbh {

  public $item_id;
  public $sesion;
  public $sel_item_qty;
  public $sel_item_size;
  public $sel_item_color;

  public function pre_pavadinimas($item_id) {
    $this->item_id = $item_id;

    $stmt = $this->connect()->prepare("SELECT prekės_pavadinimas FROM prekes WHERE id = ?");
    $stmt->execute([$this->item_id]);

    if ($stmt->rowCount() < 1) {
         header("Location: indx.php?neikrepseli=nepavyko");
         exit();
       }
}


   public function pre_i_krepseli() {
     $this->item_id = $_POST["sel_item_id"];
     $this->sesion = $_COOKIE["PHPSESSID"];
     $this->sel_item_qty = $_POST['sel_item_qty'];

     if (!isset($_POST['sel_item_size']) && !isset($_POST['sel_item_color'])) {
       $stmt = $this->connect()->prepare("INSERT INTO krepselis (session_id, item_id, sel_item_qty, date_added)
                                  VALUES (?,?,?, now())");
       $stmt->execute([$this->sesion, $this->item_id, $this->sel_item_qty]);
     }

     if (isset($_POST['sel_item_size']) && !isset($_POST['sel_item_color'])) {
          $this->sel_item_size = $_POST['sel_item_size'];
          $stmt = $this->connect()->prepare("INSERT INTO krepselis (session_id, item_id, sel_item_qty, sel_item_size, date_added)
                                     VALUES (?,?,?,?, now())");
          $stmt->execute([$this->sesion, $this->item_id, $this->sel_item_qty, $this->sel_item_size]);
     }

      if (!isset($_POST['sel_item_size']) && isset($_POST['sel_item_color'])) {
          $this->sel_item_color = $_POST['sel_item_color'];
          $stmt = $this->connect()->prepare("INSERT INTO krepselis (session_id, item_id, sel_item_qty, sel_item_color, date_added)
                                     VALUES (?,?,?,?, now())");
          $stmt->execute([$this->sesion, $this->item_id, $this->sel_item_qty, $this->sel_item_color]);
      }

      if (isset($_POST['sel_item_size']) && isset($_POST['sel_item_color'])) {
        $this->sel_item_size = $_POST['sel_item_size'];
        $this->sel_item_color = $_POST['sel_item_color'];
        $stmt = $this->connect()->prepare("INSERT INTO krepselis (session_id, item_id, sel_item_qty, sel_item_size, sel_item_color, date_added)
                                   VALUES (?,?,?,?,?, now())");
        $stmt->execute([$this->sesion, $this->item_id, $this->sel_item_qty, $this->sel_item_size, $this->sel_item_color]);
      }
  }
}
 ?>
