<?php
    include 'assets/config/dbcon.php';
    include 'assets/includes/headers.php';
    include 'assets/includes/sessions.php';
    auth();
    
?>
<body>
<?php include 'assets/includes/dashboard-nav.php'; ?>


<section class="mt-3">
  <?php 
      echo successMessage(); echo errorMessage();
    ?>
<div class="container">
<div class="card mx-auto p-3 mt-4 shadow-lg">
         <div class="table-responsive mt-3">
            <table class="table table-hover">
              <thead class="table-dark">
                <tr>
                  <th scope="col">Room Name</th>
                  <th scope="col">Room Stock</th>
                  <th scope="col">Room Price</th>
                  <th scope="col">...</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $sql = "SELECT * FROM rooms";
                  $query = mysqli_query($connectDB,$sql);
                  while ($row = mysqli_fetch_assoc($query)) {
                ?>
                <tr>
                  <td><?php echo $row['room_name']; ?></td>
                  <td><?php echo $row['room_stock']; ?></td>
                  <td><?php echo "₦".number_format($row['price'],2,'.',','); ?></td>
                  <td>
                    <a href="update?q=<?php echo $row['id']; ?>&name=<?php echo $row['room_name']; ?>" class="btn btn-secondary btn-sm">
                      <i class="fas fa-upload"></i>
                    </a>
                    <a href="" class="btn btn-danger btn-sm">
                      <i class="fas fa-trash"></i>
                    </a>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
              
            </table>
         </div>
       </div>
</div>
</section>




<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>