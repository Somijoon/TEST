<?php
function say_hello($word)
{echo "hello $word ! <br/>";

}
say_hello("worlddddddddddddddddddddddddddddddddddddddd");
say_hello("every one");

function addition($val1,$val2)
{$sum= $val1 + $val2;
return $sum; 

}
echo addition(3,4);


function cube($num)
{
echo "<br/>";
echo $num * $num * $num;
echo "<br/>";
}
cube(6);


function newline($x)
{
for ($i=0;$i<$x;++$i)
{
echo "<BR>";
}
}
echo("line1");
newline(5);
echo("line2");


echo "<br/>";
function addvalues($value1=0,$value2=0,$value3=0)
{
$total=$value1+$value2+$value3;
return $total;
}

 
echo addvalues(1);
echo "<br/>";
echo addvalues(1,2,3);

function msg($name,$age)
{
{if ($name=="")
{echo "error.";
return;
}
}echo "may name is $name and my age is $age";

}
msg("",4);


/*function makecoffee($type=array("capochino"),$coffemaker=NULL)
{
$device=is_null($coffemaker)?"hands":$coffemaker;
return "making a cup of".join(",",$type)."with $device.\n";

}
echo makecoffe();
echo makecoffee(array("capochino"),"lavazza"),"teapot");*/



function vol($r){
return 3.14159 *cube($r);
}
$radius=2;
echo vol($radius);
echo "<br>".(cube(4));

function foo()
{echo "in foo()</br>\n";
function bar($arg=")
{
echo "in bar();argumant was '$arg'.<br/>\n";

}

function echoit($string)
{
echo $sting;
}
$func='foo';
$func();
$func='bar';
$func('test');
$func=''echohit;
$func(test);
echoit();
}




?>