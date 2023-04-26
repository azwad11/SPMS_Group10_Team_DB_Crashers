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

      <!-- div row-1 -->
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

      <div
      style="height:50px;display:flex;justify-content:space-around;">
      
        <select name="courseInstructor1" class="select"
        style=" margin-top:50px; background-color: #15449a; border-radius:5 px; border: none; outline:none; color: #fff; font-size:14px; letter-spacing: 2px; box-shadow: 0 0 20px 2px rgba(242, 242, 242); text-transform: uppercase; curson: pointer; font-weight: bold;margin-left:45%;height: 36px;">
             <option disabled selected>Course Instructor</option>
             <option value="4275">Tahsin F.Ara Nayna</option>
             <option value="4361">Shovasis Kumar Biswas</option>
             <option value="4351">Nabila Rahman Nodi</option>
             <option value="2518">Mubash-Shera Karishma Mobarok</option>
             <option value="2344">Nadira Sultana Mirza</option>
             <option value="2259">Mainuddin Chowdhury</option>
             <option value="2483">Kazi Mubinul Hasan Shanto</option>
             <option value="4449">Sheikh Abujar</option>
             <option value="3329">Abul Khair jyote</option>
         </select>     


         <select name="courseInstructor2" class="select"
            style=" margin-top:50px; background-color: #15449a; border-radius:5 px; border: none; outline:none; color: #fff; font-size:14px; letter-spacing: 2px; box-shadow: 0 0 20px 2px rgba(242, 242, 242); text-transform: uppercase; curson: pointer; font-weight: bold;margin-left:45%;height: 36px;">
             <option disabled selected>Course Instructor</option>
             <option value="4275">Tahsin F.Ara Nayna</option>
             <option value="4361">Shovasis Kumar Biswas</option>
             <option value="4351">Nabila Rahman Nodi</option>
             <option value="2518">Mubash-Shera Karishma Mobarok</option>
             <option value="2344">Nadira Sultana Mirza</option>
             <option value="2259">Mainuddin Chowdhury</option>
             <option value="2483">Kazi Mubinul Hasan Shanto</option>
             <option value="4449">Sheikh Abujar</option>
             <option value="3329">Abul Khair jyote</option>
         </select>
      
         <select name="courseInstructor3" class="select"
            style=" margin-top:50px; background-color: #15449a; border-radius:5 px; border: none; outline:none; color: #fff; font-size:14px; letter-spacing: 2px; box-shadow: 0 0 20px 2px rgba(242, 242, 242); text-transform: uppercase; curson: pointer; font-weight: bold;margin-left:45%;height: 36px;">
            <option disabled selected>Course Instructor</option>
             <option value="4275">Tahsin F.Ara Nayna</option>
             <option value="4361">Shovasis Kumar Biswas</option>
             <option value="4351">Nabila Rahman Nodi</option>
             <option value="2518">Mubash-Shera Karishma Mobarok</option>
             <option value="2344">Nadira Sultana Mirza</option>
             <option value="2259">Mainuddin Chowdhury</option>
             <option value="2483">Kazi Mubinul Hasan Shanto</option>
             <option value="4449">Sheikh Abujar</option>
             <option value="3329">Abul Khair jyote</option>
         </select>

      </form>              
      </div>

      <div style="height:50px;padding-left:43%;margin-top:15px;">
      <button onclick="viewInstructorWise()" style="height: 46px;width: 100px;margin-left:50px;display:inline-block; border-radius: 10px; border: none;outline: none;background:#00BFFF;color: #fff;font-size: 14px;letter-spacing:2px;text-transform: uppercase;cursor:pointer;font-weight: bold;">
        view</button>
      </div>
    
    <div class="row3" style="margin-top:5px;"> 
       <div id="Spring" style="width: 500px; height: 500px; display:inline-block;"></div>
       <div id="Summer" style="width: 500px; height: 500px; display:inline-block;"></div>
       <div id="Autumn" style="width: 500px; height: 500px; display:inline-block;"></div>
     </div>
</div>  

<?php
if(isset($_POST['submitInstructorName'])){
    $year=$_POST['year'];
    $instructor1=$_POST['courseInstructor1'];
    $instructor2=$_POST['courseInstructor2'];
    $instructor3=$_POST['courseInstructor3'];
  }?>


<!-- chosen instructor wise function -->

<script>
    function viewInstructorWise(){
     
    <?php
    $sql="SELECT e.firstName AS firstName,e.lastName AS lastName, AVG(scp.gradePoint) AS GPA
    FROM student_course_performance_t AS scp,section_t AS sec, registration_t AS r,
    employee_t AS e
    WHERE scp.registrationID=r.registrationID AND r.sectionID=sec.sectionID
    AND sec.facultyID=e.employeeID AND sec.year='$year' AND sec.semester='autumn'
    AND sec.facultyID IN ('$instructor1','$instructor2','$instructor3')
    GROUP BY sec.facultyID";
    $result=mysqli_query($con,$sql);
    ?>
    
    google.charts.load('current', {'packages':['bar']});
    google.charts.setOnLoadCallback(drawAutumnChart);
    google.charts.setOnLoadCallback(drawSummerChart);
    google.charts.setOnLoadCallback(drawSpringChart);

      function drawAutumnChart() {
        var data = google.visualization.arrayToDataTable([
          ['Course Instructor','GPA'],
          
          <?php
            while($data=mysqli_fetch_array($result)){
              $courseInstructor=$data['firstName']." ".$data['lastName'];
              $GPA=$data['GPA'];
           ?>
           ['<?php echo $courseInstructor;?>',<?php echo $GPA;?>],   
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
$sql="SELECT e.firstName AS firstName,e.lastName AS lastName, AVG(scp.gradePoint) AS GPA
FROM student_course_performance_t AS scp,section_t AS sec, registration_t AS r,
employee_t AS e
WHERE scp.registrationID=r.registrationID AND r.sectionID=sec.sectionID
AND sec.facultyID=e.employeeID AND sec.year='$year' AND sec.semester='summer'
AND sec.facultyID IN ('$instructor1','$instructor2','$instructor3')
GROUP BY sec.facultyID";
$result=mysqli_query($con,$sql);
?>

      function drawSummerChart() {
        var data = google.visualization.arrayToDataTable([
          ['Course Instructor','GPA'],
          
          <?php
            while($data=mysqli_fetch_array($result)){
                $courseInstructor=$data['firstName']." ".$data['lastName'];
              $GPA=$data['GPA'];
           ?>
           ['<?php echo $courseInstructor;?>',<?php echo $GPA;?>],   
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
$sql="SELECT e.firstName AS firstName,e.lastName AS lastName, AVG(scp.gradePoint) AS GPA
FROM student_course_performance_t AS scp,section_t AS sec, registration_t AS r,
employee_t AS e
WHERE scp.registrationID=r.registrationID AND r.sectionID=sec.sectionID
AND sec.facultyID=e.employeeID AND sec.year='$year' AND sec.semester='spring'
AND sec.facultyID IN ('$instructor1','$instructor2','$instructor3')
GROUP BY sec.facultyID";
$result=mysqli_query($con,$sql);
?>

function drawSpringChart() {
        var data = google.visualization.arrayToDataTable([
          ['Course Instructor','GPA'],
          
          <?php
            while($data=mysqli_fetch_array($result)){
                $courseInstructor=$data['firstName']." ".$data['lastName'];
              $GPA=$data['GPA'];
           ?>
           ['<?php echo $courseInstructor;?>',<?php echo $GPA;?>],   
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