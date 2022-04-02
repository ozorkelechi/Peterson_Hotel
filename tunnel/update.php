<?php
    include 'assets/config/dbcon.php';
    include 'assets/includes/headers.php';
    include 'assets/includes/sessions.php';
    auth();
    
    if (!isset($_GET['q'])) {
       header('Location:dashboard');
    }else{
        $roomID = $_GET['q'];
        $sql = "SELECT * FROM rooms WHERE id = '$roomID'";
        $query = mysqli_query($connectDB,$sql);
        $row = mysqli_fetch_assoc($query);
    }
?>
<body>
<?php include 'assets/includes/dashboard-nav.php'; ?>


<section class="mt-3">
  <?php 
      echo successMessage(); echo errorMessage();
    ?>
<div class="container">
<div class="card mx-auto p-3 mt-4 shadow-lg">
           <form action="../assets/config/update_control.php" method="post">
               <div class="row">
                   <input type="hidden" value="<?php echo $row['id']; ?>" name="roomID">
                   <div class="col-md-6 mb-2">
                       <label>Room Name:</label>
                       <input type="text" placeholder="<?php echo $row['room_name']; ?>" name="roomName" class="form-control">
                   </div>
                   <div class="col-md-6 mb-2">
                   <label>Room Stock:</label>
                       <input type="number" placeholder="<?php echo $row['room_stock']; ?>" name="roomStock" class="form-control">
                   </div>
                   <div class="col-md-6 mb-2">
                   <label>Room Price:</label>
                       <input type="number" placeholder="<?php echo "₦".number_format($row['price'],2,'.',','); ?>" name="roomPrice" class="form-control">
                   </div>

                   <div class="text-end my-3">
                       <button type="submit" class="btn btn-primary" name="updateRoom">Update</button>
                   </div>
               </div>
           </form>
       </div>
</div>
</section>




<script src="../assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>