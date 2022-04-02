<?php
    include "assets/includes/headers.php";
    include "assets/includes/sessions.php";
    
?>
<body>
    <?php include_once "assets/includes/top-header.php" ?>
    <?php include_once 'assets/includes/main-nav.php'; ?>

    <div class="container-fluild pt-4 bg-info p-5">
        <?php echo successMessage(); echo errorMessage(); ?>
        <div class="card mx-auto w-50 p-2 log">
            <img src="../PETERSON_HOTEL/hotel-images/clipart440191.png" class="text-center" height="50px" width="50px" class="m-3"> Log In
            <form action="assets/config/login_control.php" method="post">
                <input type="email" name="email" placeholder="Email*"  class="form-control mb-3">
                <input type="password" name="password" placeholder="Password*"  class="form-control mb-2">
                <a class="nav-link text-dark float-end" onclick="change()">
                   Click here to Register
                </a>

                <a href="dashboard.php"><button type="submit" name="login" class="btn btn-primary">Login</button></a>
            </form>
        </div>

        <div class="card mx-auto w-75 d-none p-2 reg">
            <img src="../PETERSON_HOTEL/hotel-images/clipart440191.png" height="50px" width="50px" class="m-3"> Register
            <form action="assets/config/register.php" method="post">
                <input type="text" name="fname" placeholder="First Name*"  class="form-control mb-3" required>
                <input type="text" name="lname" placeholder="Last Name*"  class="form-control mb-3" required>
                <input type="text" name="dob" onfocus="(this.type = 'date')"  placeholder="Date of Birth*"  class="form-control mb-3" required>
                <input type="email" name="email" placeholder="Email*"  class="form-control mb-3" required>
                <input type="tel" name="phone" placeholder="Phone Number*"  class="form-control mb-3" required>
                <input type="password" name="password" placeholder="Password*"  class="form-control mb-2" required>
                <input type="password" name="cpass" placeholder="Confirm Password*"  class="form-control mb-2" required>

                <button type="submit" name="register" class="btn btn-primary">Sign Up</button>

                <a class="nav-link text-dark float-end" onclick="change()">
                   Click here to Login
                </a>
            </form>
        </div>
    </div>

    <div class="container-fluid mt-5 p-5" style="background-color: #EEEEEE;">
        <div class="row">
            <div class="col-lg-3">
                <p class="fs-3 fw-bold ">How can we help?</p>
                <p class="fs-4 fw-bolder text-primary">1-800-HILTONS</p>
                <p>Call us, it's toll-free.</p>

              <div class="fs-1">
                <a href="https://twitter.com/hiltonhotels"><i class="fab fa-twitter-square text-primary"></i></a>
                <a href="https://www.facebook.com/hilton/"><i class="fab fa-facebook-square text-primary"></i></a>
                <a href="https://www.youtube.com/user/hilton"><i class="fab fa-youtube text-danger"></i></a>
                <a href="https://instagram.com/HiltonHotels"><i class="fab fa-instagram-square text-danger"></i></a>
                <a href="https://www.pinterest.com/hiltonhotels/"><i class="fab fa-pinterest text-danger"></i></a>
              </div>

                 </div>
            <div class="col-lg-4">

            </div>
            <div class="col-lg-2">
                <ul class="list-unstyled">
                    <li>
                        <a href="#">Travel Inspiration</a>
                    </li>
                    <li>
                        <a href="#">Pet-Friendly Stays</a>
                    </li>
                    <li>
                        <a href="#">Hilton Gift Card</a>
                    </li>
                    <li>
                        <a href="#">Global Privacy Statement</a>
                    </li>
                    <li>
                        <a href="#">Site Map</a>
                    </li>
                    <li>
                        <a href="#">Careers</a>
                    </li>
                    <li>
                        <a href="#">Development</a>
                    </li>
                    <li>
                        <a href="#">Media</a>
                    </li>
                    <li>
                        <a href="#">Web Accessibility</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3">
                <ul class="list-unstyled">
                    <li>
                        <a href="#">Cookies Statement</a>
                    </li>

                    <li>
                        <a href="#">Site Usage Agreement</a>
                    </li>

                    <li>
                        <a href="#">Personal Data Requests</a>
                    </li>

                    <li>
                        <a href="#">Do Not Sell My Personal Information</a>
                    </li>

                    <li>
                        <a href="#">Modern Slavery and Human Trafficking</a>
                    </li>

                    <li>
                        <a href="#">Hilton Honors Discount Terms & Conditions</a>
                    </li>
                
                    <li>
                        <a href="#">Hilton Hotline</a>
                    </li>
                </ul>
            </div>
                  
                 
                  
                  
                 
                  
                  
         </div>
    </div>
     <div>
     <hr>
              <div class="text-center">
                    <i class="fas fa-copyright fs-5 text-secondary">Peterson 2022 PETERSON_HOTEL All rights reserved</i>
                    <p>Made by Kelechi</p>
              </div>
     </div>
       

    <style>
        a:hover{
            cursor: pointer;
            font-weight: bold;
            color: red;
        }
    </style>
    <script>
        function change(){
            document.querySelector('.reg').classList.toggle('d-none');
            document.querySelector('.log').classList.toggle('d-none');
        }
    </script>

<script src="assetss/includes/js/bootstrap.bundle.min.js"></script>
</body>
</html>