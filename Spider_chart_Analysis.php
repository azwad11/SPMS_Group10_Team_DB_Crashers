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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <!-- JS Charts -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>

#chartdiv {
  width: 100%;
  height: 500px;
  background-color:pink;
}

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
    
    .studentID{
        background-color:#6698FF;
        height:36px;border: 1px solid;
        cursor: pointer;
        border-radius: 5px;
        font-size: 14px;
        letter-spacing:2px;
        font-weight: bold;
        text-transform: uppercase;
        border: none;
        outline: none;
        text-align: center;
        color:white;
    }

    .studentID:hover{
    background:linear-gradient(90deg,#87CEFA,#00BFFF);
    }
    .studentID:active{
    opacity: 0.5;
    }

    .enterButton{
        background:#6698FF;
        border-radius:10px;
        border:none;
        outline:none;
        color:#fff;
        font-size:14px;
        letter-spacing:2px;
        text-transform:uppercase;cursor:pointer;
        font-weight:bold;margin-left:10px;
        height: 36px;
        width: 100px;"
             
    }

    .enterButton:hover{
    background:linear-gradient(90deg,#87CEFA,#00BFFF);
    }
    .enterButton:active{
    opacity: 0.5;
    }

    .viewButton{
        background:#6698FF;
        border-radius:10px;
        border:none;
        outline:none;
        color:#fff;
        font-size:14px;
        letter-spacing:2px;
        text-transform:uppercase;cursor:pointer;
        font-weight:bold;margin-left:10px;
        height: 36px;
        width: 100px;"
    }

    .viewButton:hover{
    background:linear-gradient(90deg,#87CEFA,#00BFFF);
    }
    .viewButton:active{
    opacity: 0.5;
    }

    body{
            background-color:#155977;
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

<!-- div row-1 starts here -->
     <div style="display:flex;justify-content:center;padding-top:15px;" class="row1">
     <form method="POST">

     <input style="margin-top:20px;margin-bottom:20px;" class="studentID" type="text" placeholder="Enter Student ID" name="studentID"/>

    <input style="margin-top:20px;margin-bottom:20px;" class="enterButton" type="submit" name="submit" value="Enter"/>

    </form>       
    </div>  <!-- div row-1 ends here -->

       
        <!-- div row-2 -->
    <div style="display:flex;justify-content:center;margin-bottom:10px;">

        <button onclick="poView()" style="width:200px;" class="viewButton">view PO analysis</button>
        <button onclick="coView()" style="width:200px;" class="viewButton">View CO analysis</button>
    
    </div> <!-- div row-2 ends here -->

        <div style="display:flex;justify-content:center;margin-top:5px;height:600px;width:100%;"class="row3"> 
        <canvas style="background-color:white;height:500px;width:400px;" id="myChart"></canvas>
        </div> <!-- div row-3 ends here -->

     </div>  <!-- background div ends here -->

    <?php
    if(isset($_POST['submit'])){
    $studentID=$_POST['studentID'];
    }?>


<script>
  
  function poView(){
  <?php
   $sql="SELECT po.poNum AS poNum, 
   AVG((ans.markObtained/q.markPerQuestion)*100) AS percent
   FROM registration_t AS r, answer_t AS ans, question_t AS q, 
   co_t AS co, po_t AS po
   WHERE r.registrationID=ans.registrationID 
   AND ans.examID=q.examID
   AND ans.answerNum=q.questionNum AND q.coNum=co.coNum 
   AND q.courseID=co.courseID AND co.poID=po.poID 
   AND r.studentID='$studentID'
   GROUP BY po.poNum";

   $result=mysqli_query($con,$sql);

   $po=array();
   $percent=array();

   while($data=mysqli_fetch_array($result)){
             
    array_push($po,"PO ".$data['poNum']);
    array_push($percent,$data['percent']);
    
  }

  ?>

 
  var po=<?php echo json_encode($po); ?>;
  var percent=<?php echo json_encode($percent); ?>;

  for(var i=0;i<percent.length;i++){
    percent[i]=parseFloat(percent[i]);
  }
    
    const ctx = document.getElementById('myChart');

new Chart(ctx, {
  type: 'radar',
  data: {
    labels: po,
    datasets: [{
      label: 'PO Achieved',
      data: percent,
      fill: true,
      backgroundColor: 'rgba(54, 162, 235, 0.2)',
    borderColor: 'rgb(54, 162, 235)',
    pointBackgroundColor: 'rgb(54, 162, 235)',
    pointBorderColor: '#fff',
    pointHoverBackgroundColor: '#fff',
    pointHoverBorderColor: 'rgb(54, 162, 235)'}]
  },
  options: {
    elements: {
      line: {
        borderWidth: 3
      }
    }
  }
});

  }

  function coView(){
  <?php
   $sql="SELECT q.coNum, 
   AVG((ans.markObtained/q.markPerQuestion)*100) AS percent
   FROM registration_t AS r, answer_t AS ans, question_t AS q, 
   co_t AS co, po_t AS po
   WHERE r.registrationID=ans.registrationID 
   AND ans.examID=q.examID
   AND ans.answerNum=q.questionNum AND q.coNum=co.coNum
   AND r.studentID='$studentID'
   GROUP BY q.coNum";

   $result=mysqli_query($con,$sql);

   $co=array();
   $percent=array();

   while($data=mysqli_fetch_array($result)){
             
    array_push($co,"CO ".$data['coNum']);
    array_push($percent,$data['percent']);
    
  }

  ?>

 
  var co=<?php echo json_encode($co); ?>;
  var percent=<?php echo json_encode($percent); ?>;

  for(var i=0;i<percent.length;i++){
    percent[i]=parseFloat(percent[i]);
  }
    
    const ctx = document.getElementById('myChart');

new Chart(ctx, {
  type: 'radar',
  data: {
    labels: co,
    datasets: [{
      label: 'CO Achieved',
      data: percent,
      fill: true,
      backgroundColor: 'rgba(54, 162, 235, 0.2)',
    borderColor: 'rgb(54, 162, 235)',
    pointBackgroundColor: 'rgb(54, 162, 235)',
    pointBorderColor: '#fff',
    pointHoverBackgroundColor: '#fff',
    pointHoverBorderColor: 'rgb(54, 162, 235)'}]
  },
  options: {
    elements: {
      line: {
        borderWidth: 3
      }
    }
  }
});

  }


</script>



</body>

</html>