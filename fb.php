Q. WAP A PROGRAM TO PRINT THE FIBONNACI SERIES UPTO 15 TERMS.

A. INPUT:
     <?php
     $i=0;$b=1;
     echo $i."<br>";
     echo $b."<br>";
     for($n=0;$n<15;$n++)
     {
     $c=$a+$b;
     $a=$b;
     $b=$c;
     echo $c."<br>";
     }
     ?>