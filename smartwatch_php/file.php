<?php
$insert=false;
if(isset($_POST['username'])){
   $server="localhost";
   $username="root";
   $password="";

   $con=mysqli_connect($server,$username,$password);

   if(!$con){
    die("connection to this database failed due to".mysqli_connect_error());
     }

$username=$_POST['username'];
$email=$_POST['email'];
$address=$_POST['address'];
$contactdetails=$_POST['contactdetails'];



 $sql="INSERT INTO `users'.'users` (`username`, `email`, `address`, `contactdetails`, `date`) VALUES ('$username', '$email', '$address', '$contactdetails', current_timestamp());";
if($con->query($sql)==true){
    $insert=true;
}
else{
    echo "ERROR: $sql <br> $con->error";
}
$con->close();
}

?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>get started by registring </title>
    <style>
        
        body {
            font-family: 'Calibri', sans-serif;
            background-color: #e5e5e5;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        #form-details {
          width:90%;
        
           display: flex;
          justify-content: space-evenly;
         padding: 30px 20px;
           border: 1px solid #e1e1e1;
         border-radius: 20px;
        }

        #form-details form {
            width: 65%;
          /* padding: 0 10px; */
            display: flex;
           flex-direction: column;
            align-items: flex-start;
           
          
            
             /* border: 3px solid red; */
        }

        form {
            
            margin: 50px auto;
            background-color: #f4ebeb;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(153, 91, 91, 0.1);
            margin-top:80px;
        }
       
        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }
        form label, form input {
            display: block;
            margin-bottom: 10px;
        }
        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #a97777;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #45a049;
        }
        h2{
            margin-bottom:10px;
        }
        
        #form-details .people {
  /* border: 2px solid blue; */
             display: flex;
            flex-direction: column;
           height:549px;
            background-color: #f4ebeb;
            margin-top:80px;

  /* justify-content: space-between; */
}

#form-details .people div {
  /* height: 45%; */
  padding: 0 5px;
  display: flex;
  align-items: center;
  /* border: 3px solid red; */
  flex: 1;
  background-color:#f4ebeb;
}
#form-details .people div:first-child,
#form-details .people div:nth-child(2) {
  border-bottom: 1px solid #e1e1e1;
}

#form-details .people div img {
  width: 65px;
  height: 65px;
  object-fit: cover;
  margin-right: 15px;
}

#form-details .people div p {
  margin: 0;
  font-size: 13px;
  line-height: 25px;
}

#form-details .people div p span {
  display: block;
  font-size: 16px;
  font-weight: 600;
  color: #000;
}

 

    </style>
     <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <a href="#" class="logo"><i class="bx bx-stopwatch"></i>Honor</a>
        
        <ul class="navlist">
            <li><a href = "index.html" class="active">Home</a></li>
            <li><a href = "#">About</a></li>
            <li><a href = "#">Smartphone</a></li>
            <li><a href = "shop.html">Store</a></li>
            <li><a href = "#">Contact Us</a></li>
        </ul>
        <div class="h-main">
            <a href="#" class="h-btn">Buy Now</a>
            <div class="bx bx-menu" id="menu-icon"></div>
            <div class="bx bx-moon" id="darkmode"></div>
        </div>
       </header> 
        <div id="mobile">
            <a href="cart.html"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
            <i id="bar" class="fa fa-bars" aria-hidden="true"></i>      
                 
        </div>
        <section id="page-header" class="about-header">
            <h2>#Contact Us</h2>
            <p> Leave a message. We would love to hear from you....</p>
            <a href="#" class="to-top">
                <i class="fas fa-chevron-up"></i>
            </a>
        </section>
    
    <section id="form-details">
        <?php
        if($insert ==true){
        echo "<p class='sumit-msg'>Thanks fdor believing in us </p>";
         }
        ?>
    <form action="file.php" method="post">
        <h2>User Registration</h2>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <label for="ID">Userid:</label>
        <input type="id" id="id" name="id" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <label for="Address">Address:</label>
        <input type="Address" id="Address" name="Address" required>
        <label for="contact">Contact details:</label>
        <input type="contact" id="contact" name="contact" required>
        <button type="submit">Register</button>
    </form>
            <div class="people">
                <div>
                    <img src="images/people/1.png" alt="">
                    <p><span>John Doe</span> Senior Marketing Manager <br> Phone: +91 1234567890 <br> Email: johndoe@gmail.com</p>
                </div>
                <div>
                    <img src="images/people/2.png" alt="">
                    <p><span>Alax Tom</span> Junior Marketing Manager <br> Phone: +91 4567832278 <br> Email: alaxtom@gmail.com</p>
                </div>
                <div>
                    <img src="images/people/3.png" alt="">
                    <p><span>Jimmy </span>  Senior consulting Manager <br> Phone: +91 34507068734 <br> Email: jimmy@gmail.com</p>
                </div>
            </div>
        </div>
</section>
   </body>
   <section id="newsletter" class="section-p1 section-m1">
    <div class="newstext">
        <h4>Sign up with us Today</h4>
        <p>Become the part of our presitigious <span>Family</span>.</p>
    </div>
    <div class="form">
        <input type="text" placeholder="your email address">
        <button class="normal">Sign Up</button>
    </div>
</section>

<footer class="section-p1">
<div class="col">
    <img class="logo" src="logo.png" alt="">
    <h4>Contact</h4>
    <p><strong>Address :</strong>23,South Delhi Road,New Delhi</p>
    <p><strong>Phone :</strong> 13569876540</p>
    <p><strong>Hours :</strong> 5hoai</p>
    <div class="follow">
        <h4>Follow Us</h4>
        <div class="icon">
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-pinterest-p"></i>
            <i class="fab fa-youtube"></i>
        </div>
    </div>
</div>

<div class="col">
    <h4>About</h4>
    <a href="#">About US</a>
    <a href="#">Delivery Information</a>
    <a href="#">Privacy Policy</a>
    <a href="#">Terms & Conditions</a>
    <a href="#">Contact Us</a>
    <a href="#">About US</a>
</div>

<div class="col">
    <h4>MY Account</h4>
    <a href="#">Sign In</a>
    <a href="#">View Cart</a>
    <a href="#">My Wishlist</a>
    <a href="#">Track My Order</a>
    <a href="#">Help</a>
</div>


<div class="col install">
    <h4>Install App</h4>
    <p>From app store or Google PLay Store</p>
    <div class="row">
        <img src="images/pay/app.jpg" alt="">
        <img src="images/pay/play.jpg" alt="">
    </div>
    <p>Secured payment Gateways</p>
    <img src="images/pay/pay.png" alt="">
</div>

<div class="copyright">
    <p>c 2022, With ❤ Bhandary,Honor.pvt.ltd</p>
</div>

</footer>

<script src="script.js"></script>
</body>
</html>

<!--INSERT INTO `users` (`username`, `userid`, `email`, `address`, `contactdetails`, `date`) VALUES ('Swatika', '2', 'email@gmail.com', '556,Jaipur', '568889976', current_timestamp());-->



