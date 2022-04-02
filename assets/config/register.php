<?php
    include '../config/dbcon.php';
    include '../includes/sessions.php';

    //set time zone
    date_default_timezone_set('Africa/Lagos');


    if (!isset($_POST['register'])) {

        $_SESSION['successMessage'] = "Please Register an Account";
        header ("Location: ../../authentication");
        header("Location: ../../authentication");
    }else{
        $firstName = $_POST['fname'];
        $lastName = $_POST['lname'];
        $dob = $_POST['dob'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        $cpass = $_POST['cpass'];
        $date = date('Y-m-d h:i:s');
        $role = 'user';
        
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $query = mysqli_query($connectDB,$sql);

        if (mysqli_num_rows($query) > 0) {
            $_SESSION['errorMessage'] = "This email already exists";
            header("Location: ../../authentication");
        }
        elseif (strlen($password) <= 6) {
            $_SESSION['errorMessage'] = "Password must be 8 characters and above..";
            header("Location: ../../authentication");
        }
        elseif ($password != $cpass) {
            $_SESSION['errorMessage'] = "Passwords do not match..";
            header("Location: ../../authentication");
        }
        else{
            $password = password_hash($password, PASSWORD_DEFAULT);
            
            // Prepare Statement
            $sql = "INSERT INTO users(first_name,last_name,dob,email,phone,user_password,user_role,date_created) VALUES(?,?,?,?,?,?,?,?)";
            // Initilise Connection to database
            $stmt = mysqli_stmt_init($connectDB);
            // Prepare the statemt 
            mysqli_stmt_prepare($stmt,$sql);
            // Bind parameters
            mysqli_stmt_bind_param($stmt,'ssssssss',$firstName,$lastName,$dob,$email,$phone,$password,$role,$date);

            // Execute the statement
            $execute = mysqli_stmt_execute($stmt);
            if ($execute) {
                $_SESSION['successMessage'] = "Registration was successfull, please log in..";
                header("Location: ../../authentication");
            }else{
                $_SESSION['errorMessage'] = "Something went wrong..";
                header("Location: ../../authentication");
            }

        }
    }//Else statement for the submit button