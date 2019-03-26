<?php
echo "hello rakhi";
$file1="status.txt";
$file2="loc.txt";
$type1=$_GET["type"];
if($type1==1)
{
	file_put_contents($file1,'pause');
}else if($type1==2)
{
	file_put_contents($file1,'play');
} else if($type1==3)
{
	$loc=$_GET["location"];
	file_put_contents($file2,$loc);
}

?>