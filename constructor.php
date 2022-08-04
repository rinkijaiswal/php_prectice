<!DOCTYPE html>
<html>
<body>

<?php
class Fruit {
  public $name;
  public $color;

  function __construct($name, $color) {
    $this->name = $name; 
    $this->color = $color;
  }

  function get_name() {
    echo $this->name;
  }

  function get_color() {
   	echo $this->color;
  }
}

$apple = new Fruit("Apple", "red");
$apple->get_name();
echo "<br>";
$apple->get_color();
?>
 
</body>
</html>
