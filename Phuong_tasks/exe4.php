<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Control flow and loops</title>
</head>
<body>

<?php include "header.php";?>
<br>

<h5>2.If-Else: Write a PHP script to get inputs (age and name) from the user and based on their age, decide if he/she is eligible for voting. (18 or more than 18 years is eligible for voting, use form to get user input).</h5>
<h5>Form_ Voting</h5>
<form method = "post"> 
    Name:  <input type="text" name ="name" require> <br><br>
    Age:      <input type="number" name ="age" require><br><br>
    <input type="submit" value = "Submit"><br><br>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $age = $_POST['age'];
    
    // Check  age 
    if ($age >= 18) {
        echo "<p>Hi $name. You are eligible for voting.</p>";
    } else {
        echo "<p>Sorry $name. You are not eligible for voting.</p>";
    }
}
?>

<h5>3.Switch Case: Write a PHP script that gets the current month and prints one of the following responses, depending on whether it's August or not:
It's August, so it's still holiday.
Not August, this is Month-name so I don't have any holidays
Hint: You can use date(F) function to get the current month name. </h5>
<?php
$current_Month = date('F');
echo " The current moth is ".$current_Month."<br>";
switch ($current_Month) {
    case "August":
        echo "It's August, so it's still holiday.";
        break;
    default:
        echo "Not August, this is $current_Month so I don't have any holidays.";
}
?>

<h5>4.For Loop: Write a PHP script that will print the multiplication table of a number (n, use form to get user input)</h5>
<h5>Multiplication Table</h5>
<!--user input -->
<form method="post">
  <label for="number">Your number is:</label><br>
  <input type="number" id="number" name="number" required><br><br>
  <input type="submit" value=" Multiplication Table">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST['number'];
    
    echo "<h4>Multiplication Table  $number:</h4>";
    echo "<table border='1'>";
    for ($i = 1; $i <= 10; $i++) {
        echo "<tr>";
        echo "<td>$number x $i = " . ($number * $i) . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>

<h5>5.While Loop: Write a PHP script that will print all the numbers from 1 to n. (use form to get user input)</h5>
<form method = "post">
    Enter a number:  <input type="number" name ="number" require> <br><br>
    <input type="submit" value = "Submit"><br>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST['number'];
    $i=1;
    While($i<=$number){
        echo "The number is ".$i."<br>";
        $i++;
    }
}
?>

<h5>6.Foreach Loop: Write a PHP script that will print all the elements of an array. $myarray=("HTML", "CSS", "PHP", "JavaScript")</h5>
<?php
$myarray=array("HTML", "CSS", "PHP", "JavaScript");
foreach ($myarray as $myarray) {
    echo "<li>$myarray</li>";
}
?>



<?php include "footer.php";?>


</body>
</html>