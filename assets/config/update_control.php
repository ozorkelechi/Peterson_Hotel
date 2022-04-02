<?php
    include 'dbcon.php';
    include '../includes/sessions.php';

    if (isset($_POST['updateRoom'])) {
       $roomId = $_POST['roomID'];
       $name = $_POST['roomName'];
       $stock = $_POST['roomStock'];
       $price = $_POST['roomPrice'];

    //    The Where Clause Specifies the particular row changes will be made 
    // The AND clause alows us to add a new WHERE condition, both conditions must be true 
       // The OR clause alows us to add a new WHERE condition, one conditions must be true 

    //    THIS UPDATES ROOM NAME
       if (!empty($name)) {
            $sql = "UPDATE rooms SET room_name = '$name' WHERE id ='$roomId'";
            $query = mysqli_query($connectDB,$sql);
    
            if ($query) {
            $_SESSION['successMessage'] = "Update was Successfull";
            header("Location: ../../tunnel/update?q=$roomId");
            }else{
            $_SESSION['errorMessage'] = "Update Failed, Please contact support";
            header("Location: ../../tunnel/update?q=$roomId");
            }
       }else{
        header("Location: ../../tunnel/update?q=$roomId");
       }

    // This UPDATES ROOM STOCK
       if (!empty($stock)) {
            $sql = "UPDATE rooms SET room_stock = '$stock' WHERE id ='$roomId'";
            $query = mysqli_query($connectDB,$sql);

            if ($query) {
            $_SESSION['successMessage'] = "Update was Successfull";
            header("Location: ../../tunnel/update?q=$roomId");
            }else{
            $_SESSION['errorMessage'] = "Update Failed, Please contact support";
            header("Location: ../../tunnel/update?q=$roomId");
            }
        }else{
            header("Location: ../../tunnel/update?q=$roomId");
        }

        
        // This UPDATES ROOM STOCK
        if (!empty($price)) {
            $sql = "UPDATE rooms SET price = '$price' WHERE id ='$roomId'";
            $query = mysqli_query($connectDB,$sql);

            if ($query) {
            $_SESSION['successMessage'] = "Update was Successfull";
            header("Location: ../../tunnel/update?q=$roomId");
            }else{
                $_SESSION['errorMessage'] = "Update Failed, Please contact support";
                header("Location: ../../tunnel/update?q=$roomId");
            }
        }else{
            header("Location: ../../tunnel/update?q=$roomId");
        }
        if (empty($name) && empty($stock) && empty($price)) {
            $_SESSION['errorMessage'] = "Fields Cannot Be Empty";
            header("Location: ../../tunnel/update?q=$roomId");
        }
    }



    // Main ELSE STATEMENT
    else{
        header('Location: ../../tunnel/dashoard');
    }