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


<br>
<br>
<!-- Task Five -->
<?php
echo "==============Task Seven================"
?>
<br>
<br>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>positive number</title>
</head>
<?php
   function test($x){
     if ($x % 3 == 0 || $x % 7 == 0) {
       return true;
     }
     else {
       return false;
     }
   }
   var_dump(test(12));
   var_dump(test(14));
   var_dump(test(10));
   var_dump(test(11));


?>



<body>

</body>

</html>


<br>
<br>
<!-- Task Eight -->
<?php
echo "==============Task Eight================"
?>
<br>
<br>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Start with</title>
</head>
<?php


function startsWith ($string , $startString)
{
  $len = strlen($startString);
  return (substr($string, 0 ,$len) === $startString);
}

if(startsWith("if you liked our video please subscribe","if"))
echo "String unchanged";
else
echo"false";
  // $string = "if you liked our video please subscribe ";
  // $search ="if";
  // if(preg_match("/{$search}/i", $string)){
  //   echo 'true';
  // }



?>

<body>

</body>

</html>

<br>
<br>

<?php
echo "==============Task Nine================"
?>
<br>
<br>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>
<?php
 // NOT SOLVED

?>

<body>

</body>

</html>

<br>
<br>

<?php
echo "==============Task Ten================"
?>
<br>
<br>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> check two integers </title>
</head>
<?php
 

  function integers($u , $o ){
  
   if ($u >= 100 && $u <= 200 || $o >= 100 && $o <= 200){
     return true;
   } else {
       return false;
   }

  }
  print_r(integers(100, 199));
  print_r(integers(250, 300));
  print_r(integers(105, 190));
  // this task not finished
  
  
        // static void Main(string[] args)
        // {
        
        //    echo ReadLine();
        // }
        // {
            

?>

<body>

</body>

</html>
<br>
<br>

<?php
echo "==============Task Eleven================"
?>
<br>
<br>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>
<?php
 // NOT SOLVED

?>

<body>

</body>

</html>

<br>
<br>

<?php
echo "==============Task Twelve================"
?>
<br>
<br>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> check two valid values </title>
</head>
<?php 
    // iguess this is the correct answer i convert it from c to php on my own 

   function oneTwo($one, $two){
    if($one <= 20 || $two >= 50 ){
      return true;
    } else {
      return false;
    }
   }
      printf(oneTwo(20, 84));
      printf("\n%d",oneTwo(14, 50));
      printf("\n%d",oneTwo(11, 45));
      printf("\n%d",oneTwo(25, 40));
    ?>


<body>

</body>

</html>
<br>
<br>

<?php
echo "==============Task Twelve================"
?>
<br>
<br>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> check two integers </title>
</head>
<?php 
   function threeNum($x ,$y, $z){
     $max = max($x,max($y, $z));
     return $max;
   } 
   echo threeNum(1,2,3);
   echo threeNum(1,3,2);
   echo threeNum(1,1,1);
   echo threeNum(1,2,2);
?>


<body>

</body>

</html>

<br>
<br>

<?php
echo "==============Task Thirteen================"
?>
<br>
<br>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Check which number nearest </title>
</head>
<?php 
    // there is something i cant put my fingers on 
    

    function near($q, $w){
      $n =100;
      
      if($val = abs($q - $n) || $val2 = abs($q - $n)){

        return $val == $val2 ? 0 : ($val < $val2 ? $q : $w);
      }else {
        return false;
      }
      // . Write a PHP script that accepts two integers and returns an integer if one of them
      // is 5, their sum, or difference between them is 5.
    }
    printf("%d",near(78, 95));
    printf("\n%d",near(95, 95));
    printf("\n%d",near(99, 70));


    ?>


<body>

</body>

</html>

<br>
<br>

<?php
echo "==============Task Fourteen================"
?>
<br>
<br>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> accepts two integers and returns an integer </title>
</head>

<?php 
//this is not right there is something wrong 
       function abs_diff($v1, $v2) {
        $diff = $v1 + $v2;
        return $diff < 0 ? (-1) * $diff : $diff;
    }
    
    echo abs_diff(5, 10); // 28

    ?>


<body>

</body>

</html>
<?php


// $users = array(
//   array ("hello","hey","what"),
//   array("ayah", "link","shawarmah")
// );
// echo $users[1][1];

// $employees = array(['name'=>'Ayah'],['name'=>'Ashraf'],['name'=>'hey']);
// echo $employees[0]['name'];

// $users = [['name'=>'anas', 'Salary' =>0.30],['name'=>'ayah', 'Salary' => 0.50]];
// // echo $users[1];
// $s_users = sort($users);
// print_r($s_users);
// // var_dump($_users);
// for($i = 0; $i < count($users); $i++){
//    echo $users[$i]['name'];
//    echo $users[$i]['Salary'];

// }

// $ints = [1,2,3,50];
// echo max($ints);
// echo min($ints);

// $users = array("Geek1", "Geek2", 
// 		"Geek3", "1", "2","3"); 

// // Loop through array 
// foreach($users as $item){ 
// 	echo $item;
// } 

// function anas(){
//   return 'My name is Anas';
// }

// echo anas();

// $employees1 = array (['name'=>'Ayah'],['name'=>'Ashraf'],['name'=>'hey']);
// $employees2 = array (['name'=>'hey'],['name'=>'Ashraf'],['name'=>'hey']);
// $result = array_intersect($employees1[1],$employees2[2]);
// print_r($result);

?>