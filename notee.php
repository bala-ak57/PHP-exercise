<?php
$a=$_GET['num1'];
if($a>=2000)
{
    $b=$a/2000;
    $c=floor($b);
    $d=$b-$c;
    $e=$d*2000;
    echo "2000 = $c<br>";
       if($e>=500)
       {
         $f=$e/500;
         $g=floor($f);
         $h=$f-$g;
         $i=$h*500;
         echo "500 = $g<br>";
          if($i>=200)
          {
            $j=$i/200;
            $k=floor($j);
            $l=$j-$k;
            $m=$l*200;
            echo "200 = $k<br>";
               if($m>=100)
               {
                 $n=$m/100;
                 $o=floor($n);
                 $p=$n-$o;
                 $q=$p*100;
                 echo "100 = $o<br>";
                    if($q>=50)
                    {
                      $r=$q/50;
                      $s=floor($r);
                      $t=$r-$s;
                      $u=$t*50;
                      echo "50 = $s<br>";
                        if($u>=20)
                        {
                           $v=$u/20;
                           $w=floor($v);
                           $x=$v-$w;
                           $y=$x*20;
                           echo "20 = $w<br>";
                              if($y>=10)
                              {
                                $z=$u/10;
                                $a1=floor($z);
                                $a2=$z-$a1;
                                $a3=$a2*10;
                                echo "10 = $a1<br>";
                                   if($a3>=5)
                                   {
                                     $a4=$a3/5;
                                     $a5=floor($a4);
                                     $a6=$a4-$a5;
                                     $a7=$a6*5;
                                     echo "5 = $a5<br>";
                                        if($a7>=2)
                                        {
                                          $a8=$a7/2;
                                          $a9=floor($a8);
                                          $a10=$a8-$a9;
                                          $a11=$a10*2;
                                          echo "2 = $a9<br>";
                                             if($a11>=1)
                                             {
                                               $a12=$u/1;
                                               $a13=floor($a12);
                                               $a14=$a12-$a13;
                                               $a15=$a14*1;
                                               echo "1 = $a13<br>";
                                             }
                                        }
                                   }
                              }
                        }
                    }
               }
          }
        }
}