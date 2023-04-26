<?php
/*Ayon*/
$invalid=0;

if($_SERVER['REQUEST_METHOD']=='POST'){
    
    include 'connect.php';
    
    $userType=$_POST['userType'];
    $ID=$_POST['ID'];
    $password=$_POST['password'];

  if($userType!='student'){
    $sql="SELECT * from employee_t where employeeID='$ID' and password='$password'";
    $result=mysqli_query($con,$sql);
    if($result){
        $num=mysqli_num_rows($result);
        if($num>0){
          $invalid=0;
            session_start();
            $_SESSION['ID']=$ID;
            header('location:dashboard.php');
        }
     }
  }    

  elseif($userType=='student'){
    $sql="SELECT * from student_t where studentID='$ID' and password='$password'";
    $result=mysqli_query($con,$sql);
    if($result){
        $num=mysqli_num_rows($result);
        if($num>0){
          $invalid=0;
            session_start();
            $_SESSION['ID']=$ID;
            header('location:dashboard.php');
        }
     }
  }    

        else{
            $invalid=1;
        }
  }
  ?>


<!doctype html>
<html lang="en">
  <head>
    <title>Login page</title>

    <style>
body {
	margin: 0;
	padding: 0;
	background: #0d2d74; 
	font-family: "Lucida Console", "Courier New", monospace;
}

      .mainContainer{
        
        margin-top:23%;
        width:40%;
      }

.login-box {
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	width: 350px;
	padding: 40px;
	background: hsl(221, 51%, 36%);
	box-shadow: 0 0 10px 2px rgba(18, 3, 87, 0.8);
	border-radius: 10px;
}

      .ID{
	width: 100%;
	margin-bottom: 10px;
	padding: 10px;
	background: transparent;
	border: none;
	border-bottom: 1px solid #fff;
	font-size: 16px;
	color: #fff;
      }

      .ID:hover{
    background:linear-gradient(90deg,#87CEFA,#00BFFF);
   }

   .ID:active{
    opacity: 0.5;
   }

      label{
        
        font-family: "Lucida Console", "Courier New", monospace;
        font-size:18px;
        color:white;
        font-weight:bold;
        
      }

  .submitButton{
     height: 46px;
     width: 150px;
     display:inline-block;
     border-radius: 10px;
     border: none;
     outline: none;
     background: #6698FF;
     color: #fff;
     font-size: 22px;
     letter-spacing:2px;
     text-transform: uppercase;
     cursor:pointer;
     font-weight: bold;
     margin-left:35%;
     font-family: "Lucida Console", "Courier New", monospace;
     margin-top:15px;

    }

    .submitButton:hover{
    background:linear-gradient(90deg,#87CEFA,#00BFFF);
   }

   .submitButton:active{
    opacity: 0.5;
   }

   .selectNew{
    height: 40px;
     width: 200px;
     display:inline-block;
     border-radius: 10px;
     border: none;
     outline: none;
     background: #6698FF;
     color: #fff;
     font-size: 18px;
     letter-spacing:2px;
     text-transform: uppercase;
     cursor:pointer;
     font-weight: bold;
     margin-left:5%;
     font-family: "Lucida Console", "Courier New", monospace;
     margin-top:15px;

   }

.avatar {
	width: 150px;
	height: 120px;
	border-radius: 50%;
	position: absolute;
	top: -130px;
	left: calc(50% - 68px);
}

    </style>


  </head>
  <body>


 <?php
 if($invalid==1){
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong></strong> Invalid credentials!
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';
  }
  ?>




  <div style="display:flex;justify-content:center;">
  <div class="mainContainer">
<div class="login-box">
		<img src="logo.png" class="avatar">

   <form action="login.php" method="post">
  <div>
    <label style="">
      User Type
    </label>
    <select name="userType" class="select selectNew">
             <option disabled selected>User Type</option>
             <option value="student">Student</option>
             <option valuae="faculty">Faculty</option>
             <option value="department head">Department Head</option>
             <option value="dean">Dean</option>
         </select>
         </div>
    <br>

    <label style="margin-left:0%;">
      ID  
    </label>
    <input class="ID" style="margin-left:5%, margin-right:5% ;" type="text" name="ID" placeholder="Enter Your ID">
    <br>
    <label>
      Password  
    </label>
    <input class="ID" style="margin-left:5%,  margin-right:5% ;" type="password" name="password" placeholder="Enter Your Password"><br>
    <input type="submit" name="submit" value="Login" class="submitButton">
    </form>
</div>
  </div>
  </div>


</body>
</html> 