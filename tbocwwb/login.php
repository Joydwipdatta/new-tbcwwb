<?php include  "connection.php";?>
<?php  session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN | TRIPURA BUILDING & OTHER CONSTRUCTION WORKERS WELFARE BOARD</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="query.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/4ebe883bff.js" crossorigin="anonymous"></script>

</head>
<body>

<!------------------------------------------- Header Section --------------------------------------------->

    <section class="navbar">
        

        <div class="mainnav">
            <div class="left-mainnav">
                <a href="index.php"><img src="img/logo.png" alt=""></a>
            </div>
            <div class="right-mainnav">
                <h1>Online Labour Cess Collection Portal</h1>
                <h3>Tripura Building And Other Construction Workers Welfare Board</h3>
                <h3>Government Of Tripura</h3>
                
            </div>
            <div class="navbuttons">
                
            </div>
        </div>
        <div class="bottomnav">
            <marquee>Online Labour Cess Collection Portal. Tripura Building And Other Construction Workers Welfare Board. Government Of Tripura. Online Labour Cess Collection Portal. Tripura Building And Other Construction Workers Welfare Board .Government Of Tripura</marquee>
        </div>
    </section>
<!------------------------------------------- Main Section --------------------------------------------->

<?php

 if(!empty($_POST['submit'])){    
     $number=$_POST['number'];
 
     $query="select * from `register` where  number='$number'";
     $result=mysqli_query($connection,$query);
     $count=mysqli_num_rows($result);
   

   if($count >0)
   { 
     

     header('location:/tbocwwb/otp.php'); 
   }
   else{
     echo "Login not successful";
   }
 }
 
 ?>

<section class="registration-sec">
        <div class="log-sec">
            <div class="registration-box">
                <h2>USER LOGIN</h2>
                <form action="login.php" method="POST">

    
                    
                    <input type="tel" id="" name="number" placeholder="Your Mobile No  ..">
                    
                    
                    <input type="submit" value="Genarate OTP" name="submit">
                     
                </form>
                
            </div>
            <a href="registration.php"><button class="new-r-btn">Click Here For New Registration</button></a>
        </div>
        
    </section>

<!------------------------------------------- Footer Section --------------------------------------------->

    <footer>
        <div class="topfoot">
            <ul>
                <li><a href="index.php"> Home</a></li><li><span class="divider">&#8739</span></li>
                <li><a href="copyright.html"> Copyright</a></li><li><span class="divider">&#8739</span></li>
                <li><a href="">Feedback</a> </li><li><span class="divider">&#8739</span></li>
                <li><a href="hyperlink.html"> Hyperlinking Policy</a></li><li><span class="divider">&#8739</span></li>
                <li><a href="privacypolicy.html"> Privacy Policy</a></li><li><span class="divider">&#8739</span></li>
                <li><a href="termscondition.html"> Terms & Conditions</a></li><li><span class="divider">&#8739</span></li>
                <li><a href="faq.html">FAQ</a></li><li><span class="divider">&#8739</span></li>
                <li><a href="contact.html"> Contact Us</a></li>
            </ul>
        </div>
        <div class="bottomfoot">
            <h4>Website content managed by Directorate of Labour, Govt of Tripura</h4>
            <h4>Developed & Maintained by: D&D LEARNING LLP</h4>
            
        </div>
    </footer>

<!-------------------------------------------- Javascript ---------------------------------------------------->


    <!-------------------- Banner Slider ----------------------->





</body>
</html>