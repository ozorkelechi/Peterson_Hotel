<?php
    include 'dbcon.php';
    include '../includes/sessions.php';


    if (!isset($_POST['login'])) {
        $_SESSION['successMessage'] = "Please Register an Account";
        header("Location: ../../authentication");
    }
    else{
        $email = $_POST['email'];
        $password = $_POST['password'];

        // SQL COMMAND
        $sql = "SELECT * FROM users WHERE email = '$email'";
        // Query the database
        $query = mysqli_query($connectDB,$sql);

        // Check if a user exist
        if (mysqli_num_rows($query) < 1) {
            $_SESSION['errorMessage'] = "Email does not exist";
            header("Location: ../../authentication");
        }else{

            // If user exists
            $row = mysqli_fetch_assoc($query);
            $returnedPassword = $row['user_password'];
            // Check if password is correct
            if (password_verify($password,$returnedPassword)) {
                // Set the session of ID
               $_SESSION['id'] = $row['id'];
               $_SESSION['full_name'] = $row['first_name']." ".$row['last_name'];
               $_SESSION['role'] = $row['user_role'];
               header('Location: ../../tunnel/dashboard.php');
            }else{
                $_SESSION['errorMessage'] = "Incorrect Password..";
                header("Location: ../../authentication");
            }
        }
    }