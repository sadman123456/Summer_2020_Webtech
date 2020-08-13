<?php
  include "include/db_connect.inc.php";
  session_start();
  $name = $gender = $email = $phone = $pass = $con_pass =  $blood = $exist_email = $dob = $error = $success = $sql =  $id = $uid = $address = "";

  if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(!empty($_POST['name'])){
      $name = mysqli_real_escape_string($conn, $_POST['name']);
    }
    if(!empty($_POST['user_gender'])){
      $gender = mysqli_real_escape_string($conn, $_POST['user_gender']);
    }
    if(!empty($_POST['user_email'])){
      $email = mysqli_real_escape_string($conn, $_POST['user_email']);
    }
    if(!empty($_POST['user_phone'])){
      $phone = mysqli_real_escape_string($conn, $_POST['user_phone']);
    }
    if(!empty($_POST['user_address'])){
      $address = mysqli_real_escape_string($conn, $_POST['user_address']);
    }
    if(!empty($_POST['user_dob'])){
      $dob = mysqli_real_escape_string($conn, $_POST['user_dob']);
    }
    if(!empty($_POST['user_blood'])){
      $blood = mysqli_real_escape_string($conn, $_POST['user_blood']);
    }
    if(!empty($_POST['user_password'])){
      $pass = mysqli_real_escape_string($conn, $_POST['user_password']);
    }
    if(!empty($_POST['user_con_password'])){
      $con_pass = mysqli_real_escape_string($conn, $_POST['user_con_password']);
      $u__hash_pass = password_hash($con_pass, PASSWORD_DEFAULT);
    }

    $user_check = "SELECT p_email FROM puser WHERE p_email = '$email' ";
    $result = mysqli_query($conn, $user_check);

    while($row = mysqli_fetch_assoc($result)){
      $exist_email = $row['email'];
    }

    if($exist_email == $email){
      $error = "You're already a member!!";
    }
    elseif($pass != $con_pass){
      $error = "Password not matched!!";
    }
    else{
      $sql = "INSERT INTO puser (p_name, p_gender, p_number, p_email, p_dob, p_blood_group, p_address, p_password)
              VALUES ('$name', '$gender', '$phone', '$email', '$dob', '$blood', '$address', '$u__hash_pass');";
      mysqli_query($conn, $sql);
      $success = "Register Successfull";

header('location: Login.php');
      }


  }
    
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sign up</title>
  </head>
  <body>
    <div align="center">
      <div class="topbar">
      </div>
        <div>
          <br><br><br>
          <span style="color:red;"><?php echo $error; ?></span>
          <span style="color:green;"><?php echo $success; ?></span>
          <form class="registration"  method="post">
            <article >
              S I G N   U P
            </article>
            <br>
            <table>
              <tr>
                <td><label >Name:</label></td>

                <td> <input type="text" name="name" value=" <?php echo $name; ?>" required> </td>
              </tr>
              <tr>
                <td><label >Gender:</label></td>

                <td>
                  <input  type="radio" name="user_gender" value="Male">Male
                  <input  type="radio" name="user_gender" value="Female">Female
                </td>

              </tr>
              <tr>
                <td><label >Email:</label></td>

                <td> <input  type="email" name="user_email" value="<?php echo $email; ?>" required> </td>
              </tr>
              <tr>
                <td><label >Phone:</label></td>

                <td> <input  type="text" name="user_phone" value="<?php echo $phone; ?>" required> </td>
              </tr>
              <tr>
                <td><label >Blood Group:</label></td>

                <td> <input  type="text" name="user_blood" value="<?php echo $blood; ?>" required> </td>
              </tr>
              <tr>
                <td><label >Date of Birth:</label></td>

                <td> <input  type="date" name="user_dob" value="<?php echo $dob; ?>" required> </td>
              </tr>
              <tr>
                <td><label >Address:</label></td>
                <td><textarea name="user_address" rows="8" cols="35"><?php echo $address; ?></textarea> </td>
              </tr>
              <tr>
                <td><label >Password:</label></td>

                <td> <input type="password" name="user_password" value="" required> </td>
              </tr>
              <tr>
                <td><label >Cofirm Password:</label></td>
                <td> <input  type="password" name="user_con_password" value="" required> </td>
              </tr>
              <tr>
                  <td colspan="2" ><input type="submit" name="submit" value="REGISTER"></td>
              </tr>
            </table>

          </form>
        </div>
        <div align="center"><a href="Login.php" ><p>Already a member? Click here.</p></a></div>
    </div>
  </body>
</html>
