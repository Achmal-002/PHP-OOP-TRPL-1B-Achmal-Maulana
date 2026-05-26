<?php
class Goodbye {
  const MESSAGE = "Thank you!";

  public function bye() {
    echo self::MESSAGE; // Access constant
  }
}

$goodbye = new Goodbye();
$goodbye->bye();
?>