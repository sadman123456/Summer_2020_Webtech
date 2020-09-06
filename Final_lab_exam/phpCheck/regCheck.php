<?php
    require_once('../service/userService.php');
    if(isset($_POST['check_name']))
    {
        $email= $_POST['nameId'];

        if(isset($name))
        {
            $getemail = getname($name);
            if(!empty($getname))
            {
                echo "name already exists!";
            }

            else
            {
                echo " good!";
            }
        }
    }

?>
<?php 
	session_start();
	require_once('../service/userService.php');

	if(isset($_POST['submit'])){

		$username 	= $_POST['username'];
		$password 	= $_POST['password'];
		$number 		= $_POST['number'];
        $name       = $_POST['name'];

		if(empty($username) || empty($password) || empty($name) || empty($number)){
			header('location: ../views/register.php?error=null_value');
        }
        if(isset($email))
        {
            $getname = getEmail($name);
            if($getname)
            {
                return false;
            }
        }
        
        
        else{

			$user = [
				'username'=> $username,
				'password'=> $password,
                'name'=> $name,
				'number'=> $number
			];

			$status = insert($user);

			if($status){
				header('location: ../views/login.php?success=registration_done');
			}else{
				header('location: ../views/register.php?error=db_error');
			}
		}
	}



?>