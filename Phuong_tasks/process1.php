

<?php 
// what to do with the data in the form1
/* 
The isset() function is used to check if a variable is set and not NULL. In this case, it's checking if the $_POST['submit'] 
value is set and not NULL. If the form has been submitted, the value of $_POST['submit'] will be set,
and the code inside the if block will be executed. If the form has not been submitted, 
the value of $_POST['submit'] will not be set, and the code inside the if block will not be executed.
*/
if (isset($_POST['submit'])) {
    $fname= $_POST['fname'];
    $lname= $_POST['lname'];
    $city= $_POST['city'];
    $groupid= $_POST['groupid'];

// connect to the database server
include 'db1.php';

//write sql statement , remember the first_name, last_name, city, groupI is the name of column in the table in database
$sql="insert into studentsinfo (first_name, last_name, city, groupId) 
values('$fname', '$lname', '$city','$groupid')";

// show our user know it was sucessful or not.

if($conn -> query($sql) === TRUE) {
    echo " Your record was added";
 }
else {
    echo "Error: " . $sql . "<br>" . $conn -> error;
    }
// close data connection
    $conn->close();
}

