
echo "# assignment-wpa" >> README.md
git init
git add README.md
git commit -m "first commit"
git branch -M main
git remote add origin https://github.com/amyruddin/assignment-wpa.git
git push -u origin main

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form id="form1" name="form1" method="post" action="">
Enter First Number: <input type="text" name="txtNo1"
/>
<br /> <br />

Addition Operation: <input type="text" name="txtOp"
value="+" readonly/>
<br /> <br />

Enter Second Number: <input type="text" name="txtNo2"
/>
<input name="submit" type="submit" id="submit"
value="Click Me!" />
</p>
</form>

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


</body>


</html>
