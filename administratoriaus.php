<?php
  include('includes/header.php');
  include('includes/signupCheck.php');
  include('includes/url.php');

    $pre_pavadinimas = (isset($_GET['prePavadinimas']) == true) ? $_GET['prePavadinimas'] : '';
    $pre_kaina = (isset($_GET['preKaina']) == true) ?  $_GET['preKaina'] : '';
    $pre_spalva = (isset($_GET['preSpalva']) == true) ?  $_GET['preSpalva'] : '';
    $pre_dydis = (isset($_GET['preDydis']) == true) ?  $_GET['preDydis'] : '';
?>

<section>
  <article>
      <div class="flex-container">

<?php
      if (isset($_GET['sekme'])) {
           $signupCheck = $_GET['sekme'];
           $ikelimo_atsakymas = new signupCheck;
           $ikelimo_atsakymas->signup($signupCheck);
         }

?>

        <form name="ikelimas" id="ikelimas" method="post" action="prekes_ikelimas.php" enctype="multipart/form-data">
              <label>Pasirinkti prekės kategoriją</label><br />
                  <select name="kategorija">
                    <option value="1">Marškinėliai</option>
                    <option value="2">Kepurės</option>
                    <option value="3">Batai</option>
                  </select><br />
                <label>Prekės pavadinimas</label><br />
                    <input id="prePavadinimas" type="text" title="" name="prePavadinimas" value="<?php echo $pre_pavadinimas; ?>" autocomplete="on"><br />
                <label>Spalva neprivalomas</label><br />
                    <input id="preSpalva" type="text" title="" name="preSpalva" value="<?php echo $pre_spalva; ?>" autocomplete="on"><br />
                <label>Dydis neprivalomas</label><br />
                    <input id="preDydis" type="text" title="" name="preDydis" value="<?php echo $pre_dydis; ?>" autocomplete="on"><br />
                <label>Prekės kaina</label><br />
                    <input id="preKaina" type="number" title="" name="preKaina" value="<?php echo $pre_kaina; ?>"><br />
                <label>Prekės nuotrauka</label><br />
                    <input id="nuotrauka" type="file" title="" name="nuotrauka" style="display:none;">
                    <input type="button" id="loadFileXml" value="Pasirinkti nuotrauką" onclick="document.getElementById('nuotrauka').click();"/>
                <label for="aprašymas">Prekės aprašymas</label><br/>
                    <textarea name="aprašymas" rows="8" cols="40"></textarea><br /><br />
                    <input class="mygtukas" type="submit" name="ĮkeltiPrekę" value="Įkelti">
          </form>
      </div>
    </article>
  </section>


<?php

      function current_url() {
      $current_url = 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . "{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
      return $current_url;
      }

      $url = current_url();
      $urlBeKintamuju = new url;
      $urlBeKintamuju->urlpakeisime($url);
      $urli = $urlBeKintamuju->urlpakeisime($url);
      echo $urli;
      ?>
      <script>
       var urli = "<?php echo $urli ?>";
       function url(urli) {
          console.log(urli);
          history.pushState({
              id: 'Pavyko'
          }, 'Pavyko uzsiregistruoti', urli);
       }
        url(urli);
     </script>
     <?php
  include('includes/footer.php');
 ?>
