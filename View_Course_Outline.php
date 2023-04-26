<!DOCTYPE html>
<html>
   <head>
   <title>Student Home Page</title>
<style>



/* Style for the input box */
.input-box {
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 60px;
  margin-top: 150px;
}

select[name="course"],
select[name="section"],
select[name="semester"],
select[name="year"] {
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  margin-right: 50px;
  box-shadow: 0 0 15px 2px rgba(242, 242, 242);
}

button[type="submit"] {
	
	padding: 10px;
	width: 100px;
	font-size: 16px;
	background-color: #15449a;
	color: #fff;
	border: none;
	border-radius: 5px;
	cursor: pointer;
	margin-left: 20px;
	box-shadow: 0 0 20px 2px rgba(242, 242, 242);
}

button[type="submit"]:hover {
  background-color: #0062cc;
}

/* Style for the button container */
.button-container {
  display: flex;
  justify-content: center;
}

/* Style for the hoverable buttons */
.hover-btn {
	padding: 10px;
	width: 150px;
	font-size: 16px;
	background-color: #15449a;
	color: #fff;
	border: none;
	border-radius: 5px;
	cursor: pointer;
	margin: 0 10px;
	transition: all 0.3s ease;
	margin-right: 50px;
	margin-left: 50px;
	margin-top: 50px;
	box-shadow: 0 0 20px 2px rgba(242, 242, 242);

}

.hover-btn:hover {
  background-color: #0062cc;
  transform: translateY(-3px);
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
}


  



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



		<div class="input-box">
  		<select name="course">
                <option value="course">Course</option>
    		<option value="CSC303">CSC303</option>
    		<option value="CSC201">CSC201</option>
    		<option value="FIN301">FIN301</option>
    		<option value="FIN201">FIN201</option>
  		</select>
  		<select name="section">
                <option value="section">Section</option>
    		<option value="1">1</option>
	        <option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>

  		</select>
  		<select name="semester">
                <option value="semester">Semester</option>
    		<option value="spring">Spring</option>
    		<option value="summer">Summer</option>
    		<option value="autumun">Autumn</option>
  		</select>
  		<select name="year">
                <option value="year">Year</option>
    		<option value="2020">2020</option>
    		<option value="2021">2021</option>
    		<option value="2022">2022</option>
                <option value="2023">2023</option>
  		</select>
  		<button type="submit">Submit</button>
		</div>

		<div class="button-container">
  		<button class="hover-btn">View</button>
		</div>


</body>
</html>