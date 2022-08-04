<?php
//variable
$name = "shivam";
$x=23;
$data = [
  ['name' => 'shivam'],
  ['name' => 'rinki']
];
// print 
echo $x;
print "Sapna"; 
print_r($data);
//if
if($x >20){
	echo "x is greater";
}
?>
<head>
	<title> jadu</title>
</head>
<body bgcolor="lightyellow">
<h1>My Name is Rinki Jaiswal .I Am From Belhara </h1>
<?php
// if else and elseif
$age=20;
if ($age >18 && $age < 20) {
	echo "enter";

}elseif($age >=20){
	echo " pagal";
}
else
{
	echo"not enter";
}

//array
$name = array("shivam", "rinki");
foreach($name as $val){
	echo $val;
}

// == check, != not equalto, && and, || or, ! not
?>
<?php
//switch statement
$favcolor = "blue";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}

// while loop
$x = 1;

while($x <= 5) {
  echo "The number is: $x <br>";
  $x++;
}

//do while
$x = 1;

do {
  echo "The number: $x <br>";
  $x++;
} while ($x <= 5);

//for loop
for ($x = 0; $x <= 10; $x++) {
  echo "The number is: $x <br>";
}

//foreach
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $val) {
  echo "$val <br>";
}


//normal function
function writeMsg() {
  echo "Hello world!";
}
// function call kia
writeMsg();


//functions with arguments
function familyName($fname) {
  echo "$fname Reference.<br>";
}

//function call kia
familyName("Jani");
familyName("Hege");

?>
</body>
</html>