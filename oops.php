<!DOCTYPE html>
<html>
<body>

<?php
class Fruit {
  // Properties
  public $name;
  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    echo $this->name;
  }
}
//apple object created
$apple = new Fruit();
$banana = new Fruit();
$apple->set_name('Apple');
$banana->set_name('Banana');

//called object
$apple->get_name();
echo "<br>";
$banana->get_name();
?>
 
</body>
</html>