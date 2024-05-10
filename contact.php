<?php
include "dbconnection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    
    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   
  <link rel="stylesheet" href="contact1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<nav class="navbar navbar-expand-md bg-light navbar-dark"
      style="height: 40px">
      
      <div class="container">
      <button class="navbar-toggler"data-toggle="collapse" data-target="#shivam2">
                    <span class="navbar-toggler-icon"> </span>
                  </button>   
                  <div class="dropdown collapse navbar-collapse" id="shivam2">      
                     <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a
              href="tel:+91 96101 01234"
              class="nav-link text-dark"
              style="margin-top: 10px; margin-left: -20px"
              ><i class="fa-solid fa-phone fa-beat" style="margin-right: 20px"></i>+91 96101 01234</a
            >
          </li>
          <li class="nav-item" style="margin-left: 20px;margin-right: -80px;">
            <a
              href="mailto:info@adhirajev.com"
              class="nav-link text-dark"
              style="margin-right: 630px; margin-top: 10px"
              ><i class="fa-solid fa-envelope fa-beat" style="margin-right: 20px"></i
              >&nbsp info@adhirajev.com </a
            >
          </li>
          <li class="nav-item" style="margin-top: 10px; font-size: 20px; ">
            <a href="#" class="nav-link text-dark"
              ><i class="fa-brands fa-whatsapp text-success"></i
            ></a>
          </li>
          <li class="nav-item" style="margin-top: 10px; font-size: 20px">
            <a href="#" class="nav-link text-dark"
              ><i class="fa-brands fa-facebook text-primary"></i
            ></a>
          </li>
          <li class="nav-item" style="margin-top: 10px; font-size: 20px">
            <a href="#" class="nav-link text-dark"
              ><i class="fa-brands fa-instagram "style="color: pink;"></i
            ></a>
          </li>

          <li class="nav-item" style="margin-top: 10px; font-size: 20px">
            <a href="#" class="nav-link text-dark"
              ><i class="fa-brands fa-youtube text-danger"></i
            ></a>
          </li>
        </ul>
        </div>
 
      </div>
    </nav>
    <nav class="navbar navbar-expand-md bg-secondary navbar-dark">
        <div class="container">
                    <a href="home.php" class="navbar-brand "><img src="logo1.png" class="okayaimg" style="width:150px;height:50px;"></a>
                  <button class="navbar-toggler"data-toggle="collapse" data-target="#shivam1">
                    <span class="navbar-toggler-icon"> </span>
                  </button>       
                  <div class="dropdown collapse navbar-collapse" id="shivam1">
                    <ul class="navbar-nav ml-auto " style="gap:15px;">
                       <li class="nav-item">
                        <a href="home.php" class="nav-link text-dark" style="font-size:20px;" >Home</a>
                        </li>
                         <li class="nav-item">
                           <a href="about.php" class="nav-link text-dark" style="font-size:20px;">About</a>
                           </li>
                         <li class="nav-item">
                           <a href="index1.php" class="nav-link text-dark" style="font-size:20px;">Products</a>     
                          </li> 
                
                           <li class="nav-item">
                                <a href="gallery.php" class="nav-link text-dark" style="font-size:20px;">Gallery</a>     
                           </li>
                             <li class="nav-item">
                             <a href="DEALERSHIP.php" class="nav-link text-dark" style="font-size:20px;">Dealrship</a> 
                        </li>
                   <li class="nav-item">
                     <a href="contact.php" class="nav-link text-dark" style="font-size:20px;" > Contact</a>
                  </li>
             </ul>
        </div>
    </nav>
    <div class="jumbotron jumbotron-fluid img-jumbo col-lg-12 col-md-12 col-sm-12 col-12 m-auto d-block" style="margin-top:0px;">
        <div class="container">
        <div style="margin-top: 120px;" class="text-center">
            <a href="contact.php"><h2 class="text1 text-white " style="font-size: 50px;">CONTACT US</h2></a><br>
            <p class="text1 text-white"><a href="home.php" class="text-dark">Home // Contact us</a></p>
         
        </div>
        </div>
    </div>
    
    <div class="container" style="margin-top:30px;margin-bottom:30px;">
        <div class="row" style="gap:10px;">
            <div class=" boxdiv col-lg-3 col-md-3 col-sm-10 col-10 m-auto d-block text-center">
            <i class="fa-solid fa-location-dot text-center"></i>
                <h2>Office zone</h2>
                <h3>Plot No. 14, Road No. 17,<br>
                    Vishwakarma Industrial Area jaisalya village,jaipur (302013)
                </h3>
            </div>
            <div class=" boxdiv2 col-lg-3 col-md-3 col-sm-10 col-10 m-auto d-block text-center">
            <i class="fa-solid fa-phone text-center"></i>
                <h2>contact</h2>
                <h3>+91 96101-01234
                </h3>
            </div>
            <div class="boxdiv3 col-lg-3 col-md-3 col-sm-10 col-10 m-auto d-block text-center">
            <i class="fa-solid fa-envelope text-center"></i>
                <h2>EMAIL ID</h2>
                <h3>info@adhirajev.com
                </h3>
            </div>
        </div>
    </div>

<div class="container-fluid">
    <div class="row text-center"style="gap:20px;" >
        <div class="col-lg-5 col-md-5 col-sm-10 col-10  d-block text-center" style="margin-top:30px;margin-right:20px;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1460.4157495779848!2d75.80180033412701!3d26.998871045035063!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db21cc800a059%3A0x6b946dc0cc2fea2e!2s14%2C%20Road%20No.%2017%2C%20Vishal%20Nagar%2C%20Vishwakarma%20Industrial%20Area%2C%20Jaipur%2C%20Rajasthan%20302013!5e1!3m2!1sen!2sin!4v1687348385217!5m2!1sen!2sin" width="380" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
       <div class="col-lg-5 col-md-5 col-sm-10 col-10 text-center formdiv" style="margin-top:30px;margin-left:35px;">
        <form action=""method="POST">
            <input type="text" placeholder="NAME" name="Name" class="name text-center" required><br>
            <input type="text" placeholder="PHONE" name="phone" class="phone text-center" required><br>
            <input type="text" placeholder="EMAIL" name="email" class="email text-center" required><br>
            <input type="text" placeholder="SUBJECT" name="subject" class="subject text-center" required><br>
            <textarea name="text" id="txt" cols="30" rows="10" placeholder="what you want to buy" class="text" required></textarea><br>
            <input type="submit" value="SUBMIT" name="submit" class="btn ">
        </form>
       </div>
    </div>
</div>

<?php
// include 'dbconnection.php';
if(isset($_POST['submit'])){
    $Name=$_POST['Name'];
    $mobile=$_POST['phone'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $text=$_POST['text'];
    $insertquery= "INSERT INTO contact (clientname,phone,email,subjectvhicle,massage) VALUES ('$Name','$mobile','$email','$subject','$text')";
    $res=mysqli_query($con,$insertquery);
    if($res){
        ?>
        <script>
        alert("WE WILL CONTACT WITH YOU SOON");
        </script>
        <?php
    }else{
        ?>
        <script>
            alert("DETAILS ARE NOT FIELD");
        </script>
        <?php
    }
}
?>




    <footer id="rs-footer" class="rs-footer" style="    margin-top: 20px;">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div  style="margin-left:35px; margin-top: 54px;" class="col-lg-3 col-md-3 col-sm-10 col-10 m-auto d-block">
                        <h3 class="footer-title" style="margin-top: 20px;">Address</h3>
                        <div class="about-widget">
                            <h4 style="color:#fff; margin:0px;"> Office : Jaipur</h4>
                            <p class="text-justify;" style="margin-bottom:12px;">Plot No. 14,<br>
                           Road No. 17, Vishwakarma industrial Area<br>
                            Jaisalya Village,jaipur 302013 <br>
                            <a href="mailto:info@adhirajev.com">Email Id : info@adhirajev.com</a><br>
                            <a href="tel:+91 96101 01234">Call :+91 96101 01234</a><br>
                        
                            </p>
                        </div>
                    </div>
                   
                    <div  style="margin-left:466px; margin-top: 64px;" class="col-lg-3 col-md-3 col-sm-10 col-10 m-auto d-block">
                        <h3 class="footer-title">Quick Links</h3>
                        <ul class="sitemap-widget">
                            <li class="active"><a href="home.php" class="text-dark">Home</a></li>
                            <li class="active"><a href="about.php" class="text-dark">About Us</a></li>
                            <li><a href="index1.php" class="text-dark">Products</a></li>
                            <li><a href="gallery.php" class="text-dark">Gallery</a></li>
                            <li><a href="dealership.php" class="text-dark">Dealership</a></li>
                            <li><a href="contact.php" class="text-dark">Contact</a></li>                    
                           </ul>
                        <br>
                    
                        
                    </div>
                    <div  style="margin-left:600px; margin-top:-147px;" class="col-lg-3 col-md-3 col-sm-10 col-10 m-auto d-block">
                        <h3 class="footer-title" style="    margin-top: -12px;">Our Products</h3>
                        <ul class="sitemap-widget">
                        
                     <li><a href="index1.php" class="text-dark">E-Cart</a></li>
                     <li><a href="index1.php" class="text-dark">E Rickshaw</a></li>
                        <li><a href="index1.php" class="text-dark">E-Scooter</a></li>
                        <li><a href="index1.php" class="text-dark">E-Motorcycle</a></li>
                        <li><a href="index1.php" class="text-dark">E-Golf Cart</a></li>
                    </ul>
                        <br>
                    
                    </div>
                     <div style="margin-left: 941px; margin-top: -141px;" class="col-lg-3 col-md-3 col-sm-10 col-10 m-auto d-block">
                        <h3 class="footer-title" style="margin-top: -10px;">Contact Us</h3>
                        <div class="recent-post-widget">
                        <div class="post-item">
                             <div class="post-date">
                                    <span class="fa fa-envelope-o"><i class="fa-solid fa-envelope"></i></span>
                                </div>
                                  <div class="post-desc">
                                    <span class="post-category">Email</span>
                                    <h3 class="post-title"><a href="mailto:info@adhirajev.com " class="text-dark"> info@adhirajev.com 
                                    </a></h3>
                                    
                                </div>
                            </div>
                            <div class="post-item">
                                <div class="post-date">
                                    <span class="fa fa-phone"></span>
                                </div>
                                <div class="post-desc" >
                                    <span class="post-category">Call Us</span>
                                    <h3 class="post-title"><a href="tel:+91 96101 01234" class="text-dark"> +91 96101 01234</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><hr>
        <div class="footer-bottom" style="margin-top: 20px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-10 col-10 m-auto d-block">
                        <div class="copyright">
                            <p style="margin-bottom: 20px;">ADHIRAJ AUTOMOTIVE PVT.LTD./POWERED BY LWILL </p>
                        </div>
                    </div>
                    <div style="margin-left:920px; margin-top: -40px;" class="col-lg-6 col-md-6 col-sm-10 col-10 m-auto d-block">
                        <div class="text-dark ft-bottom-right ">
                            <div class="footer-bottom-share">
                                <ul>
                                    <li><a href="https://api.whatsapp.com/send?phone=919511611180" class="text-white"><i class="fa-brands fa-whatsapp"></i></a></li>
                                    <li style="margin-left: 20px;margin-top: -20px;"><a href="#" class="text-white"><i class="fa-brands fa-facebook"></i></a></li>
                                    <li style="margin-left: 40px;margin-top: -20px;"><a href="#" class="text-white"><i class="fa-brands fa-twitter"></i></a></li>
                                 <li style="margin-left: 60px;margin-top: -20px;"><a href="#" class="text-white"><i class="fa-brands fa-instagram"></i></a></li>
                                </ul>
                            </div>                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>	
        
</body>
</html>

