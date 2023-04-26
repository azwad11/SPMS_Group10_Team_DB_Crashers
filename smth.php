<?php 

$con = mysqli_connect('localhost', 'root');
 
if($con){
    echo "Connection successful";
}
else{
    echo "No connection";
}

mysqli_select_db($con, 'spms');

$studentID = $_POST['studentID'];
$courseID = $_POST['courseID'];
$year = $_POST['year'];
$semester = $_POST['semester'];
$sectionNum = $_POST['sectionNum'];
$grade = $_POST['grade'];
$f_employeeID = $_POST['f_employeeID'];

session_start();


//inserting into table
$query0 = " insert into  grade_co_t (studentID, courseID, grade, sectionNum, semester, year, f_employeeID) values ('$studentID', '$courseID', '$grade', '$sectionNum', '$semester', '$year', '$f_employeeID') ";

mysqli_query($con, $query0);

header('location:CO_Analysis_Input.php');
 ?>