<?php
$a=$_GET['num1'];
if($a>=2000)
{
    $b=$a-2000;
    if($b>=2000)
    {
        $c=$b-2000;
        if($c>=2000)
        {
            $d=$c-2000;
            if($d>=2000)
            {
                $e=$d-2000;
                if($e>=2000)
                {
                    $f=$e-2000;
                        if($f>=2000)
                        {
                            $g=$f-2000;
                        }
                        else{
                           echo "2000 note is: 5";
                        }
                }
                else{
                    echo "2000 note is: 4";
                }
            }
            else{
                echo "2000 note is: 3";
            }
        }
        else{
            echo "2000 note is: 2";
        }
    }
    else{
        echo "2000 note is: 1";
    }

}
elseif($a>=500)
{
    $b=$a-500;
    if($b>=500)
    {
        $c=$b-500;
        if($c>=500)
        {
            $d=$c-500;
            if($d>=500)
            {
                $e=$d-500;
            }
            else{
                echo "500 note is: 3";
            }
        }
        else{
            echo "500 note is: 2";
        }
    }
    else{
        echo "500 note is: 1";
    }
}
elseif($a>=200)
{
    $b=$a-200;
    if($b>=200)
    {
        $c=$b-200;
        if($c>=200)
        {
            $d=$c-200;
        }
        else
        {
            echo "200 note is: 2";
        }
    }
    else
    {
        echo "200 note is: 1";
    }
}

elseif($a>=100)
{
    $b=$a-100;
    if($b>=100)
    {
        $c=$b-100;
    }
    else{
        echo "100 note is: 1";
    }
}
elseif($a>=50)
{
    $b=$a-50;
    if($b>=50)
    {
        $c=$b-50;
    }
    else{
        echo "50 note is: 1";
    }
}
elseif($a>=20)
{
    $b=$a-20;
    if($b>=20)
    {
        $c=$b-20;
        if($c>=20)
        {
            $d=$c-20;
        }
        else{
            echo "20 note is: 2";
        }
    }
    else{
        echo "20 note is: 1";
    }
}
elseif($a>=10)
{
    $b=$a-10;
    if($b>=10)
    {
        $c=$d-10;
    }
    else{
        echo "10 note is: 1";
    }
}
elseif($a>=5)
{
    $b=$a-5;
    if($b>=5)
    {
        $c=$d-5;
    }
    else{
        echo "5 Coin is: 1";
    }
}
elseif($a>=2)
{
    $b=$a-2;
    if($b>=2)
    {
        $c=$b-2;
        if($c>=2)
        {
            $d=$c-2;
        }
        else{
            echo "2 coin is: 2";
        }
    }
    else{
        echo "2 coin is: 1";
    }
}
elseif($a>=1)
{
    $b=$a-1;
    if($b>=1)
    {
        $c=$d-1;
    }
    else{
        echo "1 Coin is: 1";
    }
}