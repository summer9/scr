<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exercise 3: Variable, String & Operators"</title>
</head>
<body>

<?php 
include "header.php";
?>
<br>
<br>
<h4>Form Creation: Create a simple HTML form to collect the user’s Firstname and Lastname. Use the echo statement to print “Hello [Firstname] [Lastname], You are welcome to my site.</h4>

<form method = "post" action ="process.php"> 
    First Name: <input type="text" name ="fname" require><br></br>
    Last Name:  <input type="text" name ="lname" require> <br><br>
    Email:      <input type="email" name ="email"><br><br>
    DOB:        <input type="date" name ="DOB"><br><br>
    Select color: <input type="color" name ="color"><br><br>
    <input type="submit" value = "Submit"><br><br>
</form>


<h4>HTML Table: Prepare a simple HTML table and apply Bootstrap styles to it. Note, you have already done a table in Exercise 1. If you wish, you can use the same table.</h4>
<!--making a new table with bootstrap-->

<div class="container">
    <br>
    <br>
    <h4>Data from the above form</h4>
    <br>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Maria</td>
                <td>Lani</td>
                <td>Maria@kkk</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Phuong</td>
                <td>Le</td>
                <td>PhuongLe@jjj</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Jim</td>
                <td>Tran</td>
                <td>Jimm@llln</td>
            </tr>
        </tbody>
    </table>
</div>
<br>

<h4>String Variables: Write a PHP script with two string variables ($str1 = "Hello"; $str2 = "World";). Join them together and print the length of the string.</h4>
<?php
$str1 = "Hello";
$str2 = "World";
$joined_string = $str1 ." ".$str2 ;

$length = strlen($joined_string); 

echo $joined_string ."<br>";

echo "The length of the string is: ".$length;
?>


<h4>Number Addition: Write a script to add up the numbers: 298, 234, 46.  variables to store these numbers and an echo statement to output your answer.</h4>
<?php
$number1 = 298;
$number2 = 234;
$number3 = 46;
$sum = $number1 + $number2 + $number3;
echo "Sum of the 3 numbers above is: " . $sum;
?>

<h4>Browser Detection: Write a PHP script to detect the browser being used to view your pages. Hint: predefined variables: $_SERVER</h4>
<?php
$user_browser = $_SERVER['HTTP_USER_AGENT'];
echo "Your user browser: " . $user_browser;
?>


<?php include "footer.php";?>
</body>
</html>
