<!DOCTYPE html> 

<?php 
$cookie_name = "gfg"; 
$cookie_value = "GeeksforGeeks"; 

// 86400 = 1 day 
//setcookie(name,value,expire,path)
setcookie($cookie_name, $cookie_value, time() + (86400 * 15), "/"); 
?> 

<html>    
<body> 
	<?php 
	if(!isset($_COOKIE[$cookie_name])) { 
		echo "Cookie named '" . $cookie_name . "' is not set!"; 
	} 
	else { 
		echo "Cookie '" . $cookie_name . "' is set!<br>"; 
		echo "Value is: " . $_COOKIE[$cookie_name]; 
	} 
	
	?> 
	
</body> 

</html> 
