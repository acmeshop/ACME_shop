<?php 
$number= rand(1, 30); 
 //generates and prints a random number between 1 and 30 

echo $number;
echo "----";






if ($number <= 10) {
	echo "<SCRIPT LANGUAGE=\"JavaScript\">window.location=\"obj_cond/acme_shop_2.html\";</script>";
    
} elseif ($number <= 20) {
     echo "<SCRIPT LANGUAGE=\"JavaScript\">window.location=\"not_obj_cond/acme_shop_1.html\";</script>";
	
} else {
    echo "<SCRIPT LANGUAGE=\"JavaScript\">window.location=\"control/acme_shop_baseline.html\";</script>";
}




?>

