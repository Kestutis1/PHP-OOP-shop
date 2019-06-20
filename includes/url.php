<?php
/**
 * Pasinaikinsim kintamuosius iš url, kad būtų gražu.
 */
class url
{

  function urlpakeisime($url)
  {
    $this->url = $url;
    $url = strtok($url, '?');
    // echo $url;
    return $url;
  }
}
