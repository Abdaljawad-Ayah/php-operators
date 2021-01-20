<!-- Task one -->
<?php
echo "==============Task One================"
?>
<br>
<br>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Leap year </title>
</head>

<?php
  if($_POST){
    $year = $_POST['year'];
    if(!is_numeric($year)){
      echo "Input should be a number";
      return;
    }

    if((0 == $year % 4) and (0 != $year %100) or (0 == $year %400)) {
      echo "$year is a leap year";
    }else {
      echo "$year is not a leap year";
    }
  }
?>

<body>
  <form method="post">
    Enter the year: <input type="text" name="year">
    <input type="submit" name="submit" value="Submit">
  </form>
</body>

</html>

<br>
<br>
<!-- Task Two -->
<?php
echo "==============Task Two================"
?>
<br>
<br>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Seasons</title>
</head>

<?php 
   // today's date 
   $today = new DateTime();
  
   echo 'Today is: '. $today -> format('m-d-Y') . '<br />';

  // get the season dates
    $spring = new DateTime('March 20');
    $summer = new DateTime('June 20');
    $fall = new DateTime('September 22');
    $winter = new DateTime('December 21');
   
   switch(true) {
     case $today >= $spring && $today < $summer:
      echo 'It\'s Spring';
      break;
     case $today >= $summer && $today < $fall:
      echo 'It\'s Summer';
      break;
     case $today >= $fall && $today < $winter:  
      echo 'It\'s winter';
      break;
      
      default:
       echo 'It must be winter!';
   }
  
?>

<body>

</body>

</html>


<br>
<br>
<!-- Task Three -->
<?php
echo "==============Task Three================<br>"; 
echo "======Not Solved======";
?>
<br>
<br>


<br>
<br>
<!-- Task Three -->
<?php
echo "==============Task Four================<br>"; 
echo "======Not Solved======";
?>
<br>
<br>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Absolute</title>
</head>
<?php
  
// function int(){
//   printf($test,"%d"(53));
//   printf($test,"\n%d"(30));
//   printf($test,"\n%d"(51));
//   printf($test,"\n%d"(100));
//   }
  
//   int ($test);
//   if($test) {
//     $test = $_POST['test'];
//     if(n > 100 ){
//        return (n-100)*3;
//     }
    
//     return n-100;
    
    
      //  const int x = 51;

          // if (n > x)
          // {
          //     return (n - x)*3;
          // }
          // return x - n;
      

?>

<body>

</body>

</html>


<br>
<br>
<!-- Task Five -->
<?php
echo "==============Task Five================"
?>
<br>
<br>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Check two given integer</title>
</head>
<?php 
    function nums ($x , $y) {
      return ($x == 30) || ($y == 30) || ($x + $y == 30);
    }

    var_dump( nums(25,5));
    var_dump( nums(30,50));
    var_dump(nums(15,15));
    var_dump(nums(30,0));
 

?>

<body>

</body>

</html>

<br>
<br>
<!-- Task Five -->
<?php
echo "==============Task Six================<br>";
echo "===partially solved===<br>"
?>
<br>
<br>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<?php 
  $y = 110;
  $x = 200;
    function num ($y, $x) {
     if ($y == 100 || $y == 200 && $x== 100 || $x == 200){
       return true;
     }
    }

    var_dump( num(10, 50));
    var_dump( num(30, 50));
    var_dump(num(15, 20));
    var_dump(num(30, 20));
 

?>

<body>

</body>

</html>