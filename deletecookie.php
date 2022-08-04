

<!DOCTYPE html> 
<?php 
  
// Set the expiration date to one hour ago 
setcookie("gfg", "", time() - 3600); 
?> 
  
<html> 
  
<body> 
  
    <?php 
    echo "Cookie 'gfg' is deleted."; 
    ?> 
  
</body> 
  
</html> 