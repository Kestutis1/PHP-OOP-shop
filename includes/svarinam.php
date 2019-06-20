<?php

class svarinam {
  // $this->data = $data;
  function švarinamIvestis($data) {
        $this->data = $data;
        $this->data = trim($this->data);
        $this->data = stripslashes($this->data);
        $this->data = htmlspecialchars($this->data);
        $this->data = strtolower($this->data);
        $this->data = ucfirst($this->data);
        return $this->data;
      }
}
