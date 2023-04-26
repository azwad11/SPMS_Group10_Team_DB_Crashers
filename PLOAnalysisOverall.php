<?php
  include 'connect.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Employee Dashboard</title>
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="style.css">

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
    <script type="text/javascript"></script>  


    <style>
    
    body {
	/*background: #ffe4b7;
	font-family: "Lucida Console", "Courier New", monospace;*/

      background-image: url("background.jpg");
      background-size: cover;

    }


        ::placeholder{
          color:white;
        }

        ::-ms-input-placeholder{
          color:white;
        }

        :-ms-input-placeholder{
          color:white;
        }


header {
  position: relative;
  z-index: 1;
}

.menu {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 20px;
  list-style: none;
}

.dropdown {
  position: relative;
}

.dropdown-toggle {
  display: block;
  color: #f2f2f2; /*bottom navbar letter colour*/
  text-decoration: none;
  padding: 10px;
  transition: background-color 0.2s ease;
}

.dropdown-toggle:hover {
  background-color: rgba(242,242,242, 0.27); /*drop down main button*/
}

.dropdown-menu {
  display: none;
  position: absolute;
  top: 100%;
  left: 0;
  background-image: url("background.jpg");
      background-size: cover;

  /*background-color: #923d60*/;/*drop down color*/
  padding: 10px;
  list-style: none;
  min-width: 100%;
}

.dropdown:hover .dropdown-menu {
  display: block;
}

.dropdown-menu li a {
  display: block;
  color: #f2f2f2; /*drop down letter colour*/
  text-decoration: none;
  padding: 10px;
  line-height: 1.5;
}

.dropdown-menu li a:hover {
  background-color: rgba(242,242,242, 0.27); /*drop down hover*/
}
.navigation-container {

	box-shadow: 0 0 50px 2px rgba(242, 242, 242);
	border-radius: 20px;
  
	display: flex;
  	flex-direction: column;
	background-image: url("background.jpg")
  	/*background-color: #ffe4b7; Nav bar colour*/ 
	margin-top: 15px; 
	margin-left: 15px; 
	margin-right: 15px;
}

.top-nav, .bottom-nav {

	
	border-radius: 10px;

  display: flex;
  justify-content: center;
  padding: 10 px;

}

ul {
  display: flex;
  list-style: none;
  margin: 0;
  padding: 0;
}

li {
  margin-right: 20px;
}

a {
  color: #ffffff;
  text-decoration: none;
  font-size: 18px;
  font-weight: bold;
}

a:hover {
  text-decoration: underline;
}

nav ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

nav ul li {
  display: inline-block;
  position: relative;
}

nav ul li a {
  display: block;
  padding: 10px;
  text-decoration: none;
  color: #f2f2f2; /*Top and bottom letter colour*/
}

nav ul li ul {
  display: none;
  position: absolute;
  top: 100%;
  left: 0;
  width: 200px;
  padding: 10px;
  background-color: #fff;
  border: 1px solid #ccc;
}

nav ul li:hover ul {
  display: block;
}

nav ul li ul li a {
  display: block;
  padding: 5px 10px;
  text-decoration: none;
  color: #333;
}

nav ul li ul li a:hover {
  background-color: #f2f2f2;
}

</style>
</head>
<body>

<div class="navigation-container">
  <nav class="top-nav">
    <ul>
      <li><a href="dashboard.php">Dashboard</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </nav>
  <nav class="bottom-nav">
       <ul class="menu">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle">PLO Analysis</a>
            <ul class="dropdown-menu">
              <li><a href="PLOAnalysisDeptProgSchoolAvg.php">PLO Analysis With Dept./Program/School Average</a></li>
              <li><a href="PLOAnalysisOverall.php">PLO Analysis (overall, CO Wise, Course Wise)</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle">PLO Achievement Stats</a>
            <ul class="dropdown-menu">
              <li><a href="PLO_Comp_Student.php">PLO Comparison(Student)</a></li>
	      <li><a href="PLO_Comp_Course.php">PLO Comparison(Course)</a></li>
	      <li><a href="PLO_Comp_Program.php">PLO Comparison(Program)</a></li>
	      <li><a href="PLO_Comp_School.php">PLO Comparison(School)</a></li>
	      <li><a href="PLO_Comp_Department.php">PLO Comparison(Dept.)</a></li>
            </ul>
          </li>
          
          <li class="dropdown">
            <a href="#" class="dropdown-toggle">Data Entry</a>
            <ul class="dropdown-menu">
              <li><a href="exam_main.php">Exam</a></li>
              <li><a href="createCourseOutline.php">Create Course Outline</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle">Enrollment Stats</a>
            <ul class="dropdown-menu">
              <li><a href="Student_Enrollment_stats.php">Student Enrollment Statistics</a></li>
              <li><a href="Student_Perf_Stat_Main.php">Student Performance Stats</a></li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle">GPA Analysis</a>
            <ul class="dropdown-menu">
              <li><a href="school_dept_prog_stats.php">School/ Department/ Program-Wise</a></li>
              <li><a href="course-wise_perf_stats.php">Course-Wise</a></li>
              <li><a href="instructor-wise_perf_stats.php">Instructor-Wise</a></li>
	      <li><a href="instructor-wise(course)_perf_stats.php">Instructor-Wise Chosen Course</a></li>
	      <li><a href="#">VC/ Dean/ Head-Wise</a></li>
            </ul>
          </li>
	      <li><a href="CO_analysis_main.php">CO Analysis</a></li>
	      <li><a href="Spider_chart_Analysis.php">Spiderchart Analysis</a></li>
	      <li><a href="View_Course_Outline.php">View Course Outline</a></li>
    </ul>
  </nav>
</div>



<div class="background">

      <div style="height:80px;"class="row1">
        <form method="POST">
        <input style="background-color:#6698FF;padding: 10px; height:50px;border: 1px solid #ccc;cursor: pointer;border-radius: 20px;box-shadow: 0 0 15px 2px rgba(242, 242, 242);font-size: 14px;letter-spacing:2px;
                      font-weight: bold;text-transform:uppercase; border: none;outline: none;text-align: center;margin-right:20px;
                      color:white;margin-left:43%;margin-top:13px;" type="text" placeholder="Enter Student ID" name="studentID"/>
             
        <input style="background:#15449a;border-radius:5px; border:none;outline:none;color:#fff;font-size:14px;
                    letter-spacing:2px;box-shadow: 0 0 20px 2px rgba(242, 242, 242);text-transform:uppercase;cursor:pointer;font-weight:bold;margin-left:20px;height: 36px;width: 100px;"

        type="submit" name="submit" value="Submit"/>

        </form>
        </div>

      <div style="display:flex;justify-content:space-around" class="row2">
        <button onclick="overallPlo()" style="background:#15449a;border-radius:5px; border:none;outline:none;color:#fff;font-size:14px; margin-right: 30px; margin-left: 30pxbox-shadow: 0 0 15px 2px rgba(242, 242, 242)width:300px;margin-left:0px;" class="School-wise">Overall PLO</button>
        <button onclick="coWisePlo()" style="background:#15449a;border-radius:5px; border:none;outline:none;color:#fff;font-size:14px; margin-right: 30px; margin-left: 30pxbox-shadow: 0 0 15px 2px rgba(242, 242, 242)width:300px;margin-left:0px;" class="Department-wise">CO Wise PLO</button>
        <button onclick="courseWisePlo()" style="background:#15449a;border-radius:5px; border:none;outline:none;color:#fff;font-size:14px; margin-right: 30px; margin-left: 30pxbox-shadow: 0 0 15px 2px rgba(242, 242, 242)width:300px;margin-left:0px;" class="Program-wise">Course Wise PLO</button>
      </div>
    
     <div style="display:flex;justify-content:center;" class="row3" style="margin-top:20px;"> 
       <div id="Autumn" style="width: 65%; height: 500px; display:inline-block;margin-top:23px;"></div>
       
     </div>
</div>    

<?php
if(isset($_POST['submit'])){
  $studentID=$_POST['studentID'];
}
?>

<!-- Overall plo -->
<script>
    function overallPlo(){
    <?php

    $sql="SELECT plo.ploNum AS ploNum, 
    AVG((ans.markObtained/q.markPerQuestion)*100) AS percent
    FROM registration_t AS r, answer_t AS ans, question_t AS q, 
    co_t AS co, plo_t AS plo
    WHERE r.registrationID=ans.registrationID 
    AND ans.examID=q.examID
    AND ans.answerNum=q.questionNum AND q.coNum=co.coNum 
    AND q.courseID=co.courseID AND co.ploID=plo.ploID 
    AND r.studentID='$studentID'
    GROUP BY plo.ploNum,r.studentID";

    $result=mysqli_query($con,$sql);
    ?>
    
    google.charts.load('current', {'packages':['bar']});
    google.charts.setOnLoadCallback(drawAutumnChart);

      function drawAutumnChart() {
        var data = google.visualization.arrayToDataTable([
          ['ploNum','PLO Percentage'],
          
          <?php
            while($data=mysqli_fetch_array($result)){
             
              $ploNum="PLO".$data['ploNum'];
              $percent=$data['percent'];
              
           ?>

           ['<?php echo $ploNum;?>',<?php echo $percent;?>],   
           <?php   
            }
           ?> 
        ]);

        var options = {
          chart: {
            title: 'Overall PLO Analysis',
          },
          bars: 'vertical' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('Autumn'));
        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
}
</script> 


<!-- Co wise plo -->
<script>
function coWisePlo(){
   
    }
</script>

<!-- course wise plo -->

<script>
function courseWisePlo(){


    }
</script>

</body>

</html>