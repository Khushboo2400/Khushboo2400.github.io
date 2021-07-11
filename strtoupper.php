<?php
$a = " multimedia web technology";
$b = strtoupper($a);
echo $b;
$c =ord($a);
echo "<BR>".strtolower($b);
echo "<BR>".strlen($b)."<BR>";
echo strchr(multimedia,"t");
echo "<BR>".strpos($a,"m",3);
echo "<BR>".$c;
echo "<BR>".chr($c);
echo "<BR>".ltrim(" dsd ").",".rtrim(" nkd ").",".trim(" e ");
echo "<BR>".substr($a,-4,-2);
echo "<BR>".strcmp($b,$a);
echo "<BR>".stripslashes("jfivkfdj\dfkj\kiejf");
echo "<BR>".str_word_count($a);
echo "<BR>".strrev($a);
?>
