<?php
echo "hello rakhi";
$file="status.txt";
$type=$_GET["type"];
if($type==1)
{
	file_put_contents($file,'play');
}else
{
	file_put_contents($file,'pause');
}

?>