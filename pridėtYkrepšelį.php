<?php
include("includes/header.php");
include("includes/dbh.php");
include("includes/pasitik_preke.php");


if (isset($_POST['sel_item_id'])) {
     $sesion = $_COOKIE["PHPSESSID"];
     $item_id = $_POST["sel_item_id"];
     $sel_item_qty = $_POST['sel_item_qty'];
     $sel_item_size = $_POST['sel_item_size'];
     $sel_item_color = $_POST['sel_item_color'];

     $pasitik_pre_objekt = new pasitik_preke();
     $pasitik_pre_objekt->pre_pavadinimas($item_id);
     $pasitik_pre_objekt->pre_i_krepseli();
    
}







include("includes/footer.php");














 ?>
