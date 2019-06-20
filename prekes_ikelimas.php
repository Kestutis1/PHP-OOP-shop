<?php
  include('includes/header.php');
  include('includes/dbh.php');
  include('includes/svarinam.php');

    $svarinam = new svarinam;

        $katId = $_POST['kategorija'];
        $katId = $svarinam->švarinamIvestis($katId);
        $prePavadinimas = $_POST['prePavadinimas'];
        $prePavadinimas = $svarinam->švarinamIvestis($prePavadinimas);
        $preKaina = $_POST['preKaina'];
        $preKaina = $svarinam->švarinamIvestis($preKaina);
        $preAprašymas = $_POST['aprašymas'];
        $preAprašymas = $svarinam->švarinamIvestis($preAprašymas);
        $preSpalva = $_POST['preSpalva'];
        $preSpalva = $svarinam->švarinamIvestis($preSpalva);
        $preDydis = $_POST['preDydis'];
        $preDydis = $svarinam->švarinamIvestis($preDydis);
        echo $katId;
        echo $prePavadinimas;
        echo $preKaina;
        echo $preAprašymas;


      if(isset($_POST['ĮkeltiPrekę'])) {

        if(empty($katId)) {
            header("location: administratoriaus.php?sekme=emptyKatid&preKaina=$preKaina&preSpalva=$preSpalva&preDydis=$preDydis&prePavadinimas=$prePavadinimas");
            exit();
        }
        if(empty($prePavadinimas)) {
              header("location: administratoriaus.php?sekme=emptyPavadinimas&preKaina=$preKaina&preSpalva=$preSpalva&preDydis=$preDydis");
              exit();
        }
        if(empty($preKaina)) {
              header("location: administratoriaus.php?sekme=emptyKaina&preKaina=$preKaina&preSpalva=$preSpalva&preDydis=$preDydis&prePavadinimas=$prePavadinimas");
              exit();
        }
        if(empty($preAprašymas)) {
              header("location: administratoriaus.php?sekme=emptyAprašymas&preKaina=$preKaina&preSpalva=$preSpalva&preDydis=$preDydis&prePavadinimas=$prePavadinimas");
              exit();
        }

}



include('includes/footer.php');
 ?>
