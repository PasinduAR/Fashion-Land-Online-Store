<?php
 session_start();
 // initializing variables
/*$username = "";
$email    = "";*/
$errors = array();
 include ('connect_db.php');
 if(isset($_POST['register'])){
    $email = $_POST['email'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $pw = $_POST['pw'];
    $con_pw = $_POST['con_pw'];

    $user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
    $result = mysqli_query($con, $user_check_query);
    $user = mysqli_fetch_assoc($result);

      if(empty($phone) || empty($fname) || empty($lname) || empty($email) || empty($pw) || empty($con_pw)){
        header('location: Register-form.php?signup=empty');
        exit();
      }
      else{
        if(!preg_match("/^[a-zA-Z]*$/",$fname) || !preg_match("/^[a-zA-Z]*$/",$lname)){
            header('location: Register-form.php?signup=char');
           exit(); 
        }
        else{
          if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
              header('location: Register-form.php?signup=email');
              exit();
          }
          else{
            if($user['email'] === $email){
              header('location: Register-form.php?signup=exists');
              exit();
            }
            else{
                if($pw != $con_pw){
                    header('location: Register-form.php?pw=mixmatch');
                    exit();  
                }
                else{
                    $query = "INSERT INTO users (fname, lname, phone, email, password) VALUES('$fname', '$lname', $phone, '$email','$pw')";
                      mysqli_query($con, $query);
                    header('location: Register-form.php?signup=succes');
                  exit();
                  }
            } 
          }
        }
        
      
    }

      
  }
    