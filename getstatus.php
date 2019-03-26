<?php
$status=file_get_contents("status.txt");
$loc=file_get_contents("loc.txt");
echo $status."\n";
echo $loc;
?>