<?php
function println($x)
{echo $x;

}
$name=array("tehran","shiraz","ahwaz");
array_walk($name,'println');


$w="    zzzzahRRRa liraki";
echo ltrim($w);

echo strtolower($w);
//echo $w;


echo ucwords($w);
echo "</br>\n";
echo strlen($w);

?>