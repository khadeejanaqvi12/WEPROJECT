<?php 
include("connection.php");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <img  src="images\sign up logo.png" width="100px" height="75px" >
	<title>Sign In</title>
    <link rel="stylesheet" href="signin.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
   
</head>
<body style="background-color:maroon">
    <header class="hey"></header>
<br><br>

  <div class="text-center"> 
	<form action="" method="post">
       
		 <!-- <input class="third" type="text" name="Username" placeholder="USERNAME..."required   ><br><br>
		<input class="third" type="Password" name="Password" placeholder="PASSWORD..."required  ><br><br>
		<input class= "third"type="text" name="Email" placeholder="EMAIL ADDRESS..." required  ><br><br>
		<input class="third" type="int" name="Phone_number" placeholder="PHONE NUMBER..." required  ><br><br>
		<input class="fourth" type="submit" name="submit" placeholder="Submit" ><br> -->
	<div class="mb-3"> 
      <label for="formGroupExampleInput" class="form-label">Username</label>
      <input type="text" name="Username" class="form-control" id="formGroupExampleInput" placeholder="USERNAME" required>
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Password</label>
  <input type="Password"name="Password" class="form-control" id="formGroupExampleInput2" placeholder="PASSWORD"required>
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Password</label>
  <input type="text"name="Email" class="form-control" id="formGroupExampleInput2" placeholder="EMAIL ADDRESS"required>
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Password</label>
  <input type="text"name="Phone_number" class="form-control" id="formGroupExampleInput2" placeholder="PHONE NUMBER"required>
</div>
<div>
   <button type="Submit" name="submit" class="btn btn-success">Sign In</button>
    </form> 
</div>

<?php
                if(isset($_POST["submit"])){
                     $username=$_POST["Username"];
                     $password=$_POST["Password"];
                     $email=$_POST["Email"];
                     $phone=$_POST["Phone_number"];
                     $q=$db->prepare("INSERT INTO user (username, password , email, phone) VALUES (:Username , :Password , :Email , :Phone_number)");
                     $q-> bindValue('Username', $username);
                     $q-> bindValue('Password', $password);
                     $q-> bindValue('Email', $email);
                     $q-> bindValue('Phone_number', $phone);
                     if($q->execute()){
                        echo "<script>
                              alert('Account Created Successfully')
                        </script>";
                        //header("Location:index.php");
                    }
                    else{
                        echo "<script>
                        alert('User Register Unsuccessfull')
                        </script>";
                    }    
                }
                ?>
                <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script> 
</body>
</html>