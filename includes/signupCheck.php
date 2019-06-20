<?php

  class signupCheck
  {

    function signup($signupCheck)
    {
      $this->signupCheck = $signupCheck;
      switch ($this->signupCheck) {
        case 'ikelta':
          echo"<script> if (document.getElementById('ikelimas')) {
                document.getElementById('ikelimas').style.display = 'none';
                } </script>";
               $message = "<h3 class='centre'>Jūsų prekė sėkmingai įkelta.</h3>";
          break;
        case 'dydis':
        echo "<p class='centre'>Jūsų nuotrauką užima perdaug vietos. Ji turi būti nedidesnė 1000000 baitų.</p>";
          break;
        case 'emptyPavadinimas':
        echo "<p class='centre'>Jūs neįrašėte prekės pavadinimo.</p>";
          break;
        case 'error':
        echo "<p class='centre'>Įvyko error ikeliant jūsų nuotrauką..</p>";
          break;
        case 'netinkamas':
        echo "<p class='netinkamas'>Jūsų pasirinkta nuotrauka yra netinkamo formato. Pasirinkite jpg, jpeg, png, aba pdf formatą.</p>";
          break;
        case 'emptyKatid':
        echo "<p class='centre'>Jūs nepasirinkote prekės kategorijos.</p>";
          break;
        case 'emptyKaina':
        echo "<p class='centre'>Jūs neįrašėte prekės kainos.</p>";
          break;
        case 'emptyAprašymas':
        echo "<p class='centre'>Jūs neįrašėte prekės aprašymo.</p>";
          break;
        case 'defaultine':
        echo "<script> if (document.getElementById('ikelimas')) {
                document.getElementById('ikelimas').style.display = 'none';} </script>";
        echo "<h3 class='centre'>Jūs nepasirinkote nuotraukos todėl prekei priskirta standartinė nuotrauka.</h3>";
          break;
        default:
          // code...
          break;
      }
    }
  }
















?>
