<?php
if (isset($_POST['submit']))
{
 $No1 = $_POST['txtNo1'];
$No2 = $_POST['txtNo2'];

$No1 = (float)$No1;
$No2 = (float)$No2;

$result = $No1 + $No2;
echo "The arithmetic addition result is :"
.$result;
}
?>