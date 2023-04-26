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
    
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
    <script type="text/javascript"></script>  

<style>

    body {
	/*background: #ffe4b7;
	font-family: "Lucida Console", "Courier New", monospace;*/

      background-image: url("background.jpg");
      background-size: cover;

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
      <li><a href="login.php">Logout</a></li>
    </ul>
  </nav>
  <nav class="bottom-nav">
       <ul>
	      <li><a href="school_dept_prog_stats.php">School/Department/Program-wise</a></li>
	      <li><a href="course-wise_perf_stats.php">Course-wise</a></li>
	      <li><a href="instructor-wise_perf_stats.php">Instructor-wise</a></li>
	      <li><a href="instructor-wise(course)_perf_stats.php">Instructor-wise(Chosen Course)</a></li>
	      <li><a href="#">VC/Dean/Head-wise</a></li>

    </ul>
  </nav>
</div>

      <div class="background">

      <div class="row1">
    <form method="POST">
     <select style=" margin-top:50px; background-color: #15449a; border-radius:5 px; border: none; outline:none; color: #fff; font-size:14px; letter-spacing: 2px; box-shadow: 0 0 20px 2px rgba(242, 242, 242); text-transform: uppercase; curson: pointer; font-weight: bold;margin-left:45%;height: 36px;" name="year" class="select">
       <option disabled selected>Year</option>
       <option value="2020">2020</option>
       <option value="2021">2021</option>
       <option value="2022">2022</option>
     </select>
            <input type="submit" style="background:#00BFFF;border-radius:10px;border:none;outline:none;color:#fff;font-size:14px;letter-spacing:2px;
              text-transform:uppercase;cursor:pointer;font-weight:bold;margin-top:30px;margin-left:10px;height: 36px;width: 100px;" name="submit" value="Submit" class="submitButton">
          
    </form>  
</div> 

                   <!-- div row-2 -->

      <div style="padding-left:28%; height:50px" 
                  class="row2">
      <input style=<button style="margin-bottom: 20px; margin-right: 30px; margin-top: 20px; background-color: #15449a; border-radius:5 px; border: none; outline:none; color: #fff; font-size:14px; letter-spacing: 2px; box-shadow: 0 0 20px 2px rgba(242, 242, 242); text-transform: uppercase; curson: pointer; font-weight: bold;height: 36px;" type="text" placeholder="Enter course code" name="course1"/>

        <input style=<button style="margin-bottom: 20px; margin-right: 30px; margin-top: 20px; background-color: #15449a; border-radius:5 px; border: none; outline:none; color: #fff; font-size:14px; letter-spacing: 2px; box-shadow: 0 0 20px 2px rgba(242, 242, 242); text-transform: uppercase; curson: pointer; font-weight: bold;height: 36px;" 
        type="text" placeholder="Enter course code" name="course2"/>

      <input style=<button style="margin-bottom: 20px; margin-right: 30px; margin-top: 20px; background-color: #15449a; border-radius:5 px; border: none; outline:none; color: #fff; font-size:14px; letter-spacing: 2px; box-shadow: 0 0 20px 2px rgba(242, 242, 242); text-transform: uppercase; curson: pointer; font-weight: bold;height: 36px;"type="text" placeholder="Enter course code" name="course3"/>
      </form>              
      </div>

      <div style="height:50px;padding-left:43%;margin-top:15px;">
      <button onclick="viewCourseWise()" style="height: 46px;
    width: 100px;
    margin-left:40px;
    display:inline-block;
    border-radius: 10px;
    border: none;
    outline: none;
    background: #6698FF;
    color: #fff;
    font-size: 14px;
    letter-spacing:2px;
    text-transform: uppercase;
    cursor:pointer;
    font-weight: bold;">
       view
      </button>
      </div>
    
    <div class="row3" style="margin-top:5px;"> 
       <div id="Spring" style="width: 500px; height: 500px; display:inline-block;"></div>
       <div id="Summer" style="width: 500px; height: 500px; display:inline-block;"></div>
       <div id="Autumn" style="width: 500px; height: 500px; display:inline-block;"></div>
     </div>
</div>  

<?php
if(isset($_POST['submitCourseCode'])){
    $year=$_POST['year'];
    $course1=$_POST['course1'];
    $course2=$_POST['course2'];
    $course3=$_POST['course3'];
  }?>


<!-- course wise function -->

<script>
    function viewCourseWise(){
     
    <?php
    $sql="SELECT sec.courseID AS course, AVG(scp.gradePoint) as GPA
    FROM student_course_performance_t AS scp,registration_t AS r,section_t AS sec
    WHERE scp.registrationID=r.registrationID AND r.sectionID=sec.sectionID AND 
    sec.courseID IN ('$course1','$course2','$course3') AND sec.semester='autumn' AND sec.year='$year'
    GROUP BY sec.courseID";
    $result=mysqli_query($con,$sql);
    ?>
    
    google.charts.load('current', {'packages':['bar']});
    google.charts.setOnLoadCallback(drawAutumnChart);
    google.charts.setOnLoadCallback(drawSummerChart);
    google.charts.setOnLoadCallback(drawSpringChart);

      function drawAutumnChart() {
        var data = google.visualization.arrayToDataTable([
          ['course','GPA'],
          
          <?php
            while($data=mysqli_fetch_array($result)){
              $course=$data['course'];
              $GPA=$data['GPA'];
           ?>
           ['<?php echo $course;?>',<?php echo $GPA;?>],   
           <?php   
            }
           ?> 
        ]);

        var options = {
          chart: {
            title: 'Autumn',
          },
          bars: 'vertical' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('Autumn'));
        chart.draw(data, google.charts.Bar.convertOptions(options));
      }


<?php
$sql="SELECT sec.courseID AS course, AVG(scp.gradePoint) as GPA
FROM student_course_performance_t AS scp,registration_t AS r,section_t AS sec
WHERE scp.registrationID=r.registrationID AND r.sectionID=sec.sectionID AND sec.courseID IN ('$course1','$course2','$course3') AND sec.semester='summer' AND sec.year='$year'
GROUP BY sec.courseID";
$result=mysqli_query($con,$sql);
?>

      function drawSummerChart() {
        var data = google.visualization.arrayToDataTable([
          ['course','GPA'],
          
          <?php
            while($data=mysqli_fetch_array($result)){
              $course=$data['course'];
              $GPA=$data['GPA'];
           ?>
           ['<?php echo $course;?>',<?php echo $GPA;?>],   
           <?php   
            }
           ?> 
        ]);

        var options = {
          chart: {
            title: 'Summer',
          },
          bars: 'vertical' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('Summer'));

        chart.draw(data, google.charts.Bar.convertOptions(options)); 
    }
<?php
$sql="SELECT sec.courseID AS course, AVG(scp.gradePoint) as GPA
FROM student_course_performance_t AS scp,registration_t AS r,section_t AS sec
WHERE scp.registrationID=r.registrationID AND r.sectionID=sec.sectionID AND sec.courseID IN ('$course1','$course2','$course3') AND sec.semester='spring' AND sec.year='$year'
GROUP BY sec.courseID";
$result=mysqli_query($con,$sql);
?>

function drawSpringChart() {
        var data = google.visualization.arrayToDataTable([
          ['course','GPA'],
          
          <?php
            while($data=mysqli_fetch_array($result)){
              $course=$data['course'];
              $GPA=$data['GPA'];
           ?>
           ['<?php echo $course;?>',<?php echo $GPA;?>],   
           <?php   
            }
           ?> 
        ]);

        var options = {
          chart: {
            title: 'Spring',
          },
          bars: 'vertical' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('Spring'));
        chart.draw(data, google.charts.Bar.convertOptions(options)); 
    }

  }
</script>

  </body>

</html>