<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function evaluate($name,$attendance,$hygiene,$rating)
{
  if(($attendance<80 && $hygiene<50)||($hygiene<50 && $rating<2))
  {
     echo $name ," You are fired from the Rojan Krina Passal!!";
  }

  else
  {
      echo "Not Fired for now";
  }
}
$employeeName="Ram";
$employeeAttendance=90;
$employeeHygiene=70;
$employeeRating=3;
evaluate($employeeName,$employeeAttendance,$employeeHygiene,$employeeRating)


?> 
</body>
</html>