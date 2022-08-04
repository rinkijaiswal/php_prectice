<?php
//includeing another php file
//include('index.php');
//r - read
//w - write
//r+ - read and write but not delete
//w+ - read and write but delete
?>
<html>
<head>
	<title></title>
</head>
<body>
<!-- <?php
//echo readfile("text.xml");
?> -->
<!-- <?php
//$myfile = fopen("text.xml", "r") or die("Unable to open file!");
//echo fread($myfile,filesize("text.xml"));
//echo fgets($myfile);
//fclose($myfile);
?> -->

<?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "Mickey Mouse\n";
// first select file second data
fwrite($myfile, $txt);
$txt = "Minnie Mouse\n";
fwrite($myfile, $txt);
fclose($myfile);
?>
</body>
</html>