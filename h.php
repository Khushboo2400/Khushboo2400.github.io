Q. WAP A PROGRAM TO FIND THE AVERAGE OF 5 NUMBERS.

A. INPUT:
   <?php
   $s=array(80,10,30,70,90);
   $a= sizeof($s);
   $sum=0;
   for($i=0;$i<$a;$i++)
   {
   $sum=$sum+$s[$i];
   }
   $avg=$sum/5;
   echo "The average of 80,10,30,70,90 is ".$avg;
   ?>



