<?php
/**
 * Pasinaikinsim kintamuosius iš url, kad būtų gražu.
 */
// class url
// {
//
//   function urlpakeisime($url)
//   {
//     $this->url = $url;
//     $url = strtok($url, '?');
//     // echo $url;
//     return $url;
//   }
// }
class url
{

 public $url;

  function current_url() {
    // $this->url = $url;
    $this->url = 'http' . (isset($_SERVER['HTTPS']) ? 's' : '') . '://' . "{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
    return $this->url;
  }

  function urlpakeisime()
  {
    // $this->url = $url;
    $this->url = strtok($this->url, '?');
    // echo $url;
    return $this->url;
  }
}
