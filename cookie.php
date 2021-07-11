<?php
$c_name="country";
$c_value="india";
setcookie($c_name,$c_value,time()+(86400*2));
echo "the cookie is ".$c_name." has the value ".$_COOKIE[$c_name];
?>
