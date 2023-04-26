<!DOCTYPE html>
<html>
<head>
	<title>My CSV Uploader</title>
	<style>
		form {
			display: flex;
			flex-direction: column;
			align-items: center;
			margin-top: 100px;
		}
	</style>
</head>
   <head>
   <title>Home Page</title>
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


		button {
			/*padding: 10px;
			background-color: #4CAF50;
			color: white;
			border: none;
			border-radius: 3px;
			cursor: pointer;*/
				padding: 10px;
	width: 100px;
	font-size: 16px;
	background-color: #15449a;
	color: #fff;
	border: none;
	border-radius: 5px;
	cursor: pointer;
	margin-left: 47%;
margin-top: 15%;	


	box-shadow: 0 0 20px 2px rgba(242, 242, 242);


		}
		input[type="file"] {
			display: none; /* hide the file input field */
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
	      <li><a href="CO_grade Chart.php">CO_grade Chart</a></li>
	      <li><a href="CO_Analysis_Input.php">CO Analysis Input</a></li>
	      <li><a href="CO_Analysis_Import_CSV.php">CO Analysis Import CSV</a></li>
    </ul>
  </nav>
</div>

<body>
	<form method="post" enctype="multipart/form-data">
		<label for="csvFile">Select CSV file:</label>
		<input type="file" id="csvFile" name="csvFile" accept=".csv"><br><br>
		<button type="submit" name="submit">Upload and Process CSV</button>
	</form>

	<?php
	// Check if the form was submitted
	if (isset($_POST['submit'])) {

		// Check if a file was uploaded
		if (isset($_FILES['csvFile']) && $_FILES['csvFile']['error'] == 0) {

			// Get the file information
			$fileName = $_FILES['csvFile']['name'];
			$fileTmpName = $_FILES['csvFile']['tmp_name'];
			$fileSize = $_FILES['csvFile']['size'];
			$fileType = $_FILES['csvFile']['type'];

			// Check if the file is a CSV file
			if ($fileType == 'text/csv') {

				// Open the file
				$fileHandle = fopen($fileTmpName, 'r');

				// Loop through the file and insert the data into the SQL database
				while (($line = fgetcsv($fileHandle, 1000, ',')) !== FALSE) {
					$studentID   = $line[0];
                			$courseID  = $line[1];
                			$grade  = $line[2];
                			$sectionNum = $line[3];
                			$semester = $line[4];
                			$year = $line[5];
					$f_employeeID = $line[6];
					
					$con = mysqli_connect("localhost", "root", "", "spms");
					$query = " insert into  grade_co_t (studentID, courseID, grade, sectionNum, semester, year, f_employeeID) values ('$studentID', '$courseID', '$grade', '$sectionNum', '$semester', '$year', '$f_employeeID') ";
					mysqli_query($con, $query);
				}

				// Close the file
				fclose($fileHandle);

				// Display a success message
				echo "<p>CSV file uploaded and processed successfully.</p>";

			} else {
				echo "<p>Error: File type not supported. Please upload a CSV file.</p>";
			}

		} else {
			echo "<p>Error: No file uploaded.</p>";
		}

	}
header("Location: CO_Analysis_CSV.php".$qstring);
	?>

</body>

</body>
</html>