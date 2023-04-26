<?php
session_start();
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


    .courseID{
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

    .courseID:hover{
    background:linear-gradient(90deg,#87CEFA,#00BFFF);
    }
    .courseID:active{
    opacity: 0.5;
    }

    .f_employeeID{
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

    .f_employeeID:hover{
    background:linear-gradient(90deg,#87CEFA,#00BFFF);
    }
    .f_employeeID:active{
    opacity: 0.5;
    }
    .grade{
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

    .grade:hover{
    background:linear-gradient(90deg,#87CEFA,#00BFFF);
    }
    .grade:active{
    opacity: 0.5;
    }

    .sectionNum{
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

    .sectionNum:hover{
    background:linear-gradient(90deg,#87CEFA,#00BFFF);
    }
    .sectionNum:active{
    opacity: 0.5;
    }

    .semester{
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

    .semester:hover{
    background:linear-gradient(90deg,#87CEFA,#00BFFF);
    }
    .semester:active{
    opacity: 0.5;
    }

    .year{
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

    .year:hover{
    background:linear-gradient(90deg,#87CEFA,#00BFFF);
    }
    .year:active{
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

<div class="background">

     <div style="display:flex;justify-content:center;padding-top:15px;" class="row1">
     <form action="smth.php" method="post">


     <input style="margin-top:20px;margin-bottom:20px;" class="studentID" type="text" placeholder="Enter Student ID" name="studentID"/>

     <input style="margin-top:20px;margin-bottom:20px;" class="courseID" type="text" placeholder="Enter Course ID" name="courseID"/>

     <input style="margin-top:20px;margin-bottom:20px;" class="f_employeeID" type="text" placeholder="Enter Faculty ID" name="f_employeeID"/>

     <input style="margin-top:20px;margin-bottom:20px;" class="grade" type="text" placeholder="Enter grade" name="grade"/>

     <input style="margin-top:20px;margin-bottom:20px;" class="sectionNum" type="text" placeholder="Section" name="sectionNum"/>

     <input style="margin-top:20px;margin-bottom:20px;" class="semester" type="text" placeholder="Semester" name="semester"/>

     <input style="margin-top:20px;margin-bottom:20px;" class="year" type="text" placeholder="Year" name="year"/>

     <input style="margin-top:20px;margin-bottom:20px;" class="enterButton" type="submit" name="submit" value="Enter"/>

    </form>       


</body>
</html>