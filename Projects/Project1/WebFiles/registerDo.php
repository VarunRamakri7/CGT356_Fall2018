<?php
session_start();

// initializing variables
$username = "";
$lastname = "";
$firstname = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'ramakri7', '19fire98', 'Project1');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST["username"]);
  $firstname = mysqli_real_escape_string($db, $_POST["firstname"]);
  $lastname = mysqli_real_escape_string($db, $_POST["lastname"]);
  $password_1 = mysqli_real_escape_string($db, $_POST["password_1"]);
  $password_2 = mysqli_real_escape_string($db, $_POST["password_2"]);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($firstname)) { array_push($errors, "Firstname is required"); }
  if (empty($lastname)) { array_push($errors, "Lastname is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure a user does not already exist with the same username
  $user_check_query = "SELECT * FROM projectlogin WHERE username='$username' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	//$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO projectlogin (uniqueid, username, password, firstname, lastname) VALUES(null, '".$username."', '".$password_1."', '".$firstname."', '".$lastname."')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
    header('location: index.php');
    
  }
}