<?php  include "connection.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRATION | TRIPURA BUILDING & OTHER CONSTRUCTION WORKERS WELFARE BOARD</title>
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
                <a href="index.html"><img src="img/logo.png" alt=""></a>
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
    <section class="registration-sec">

        <div class="registration-box">
            <h2>USER REGISTRATION</h2>
            <form action="" method="post">

                <input type="text" id="fname" name="name" placeholder="Your Full Name..">
                <input type="email" id="" name="email" placeholder="Your Email Id..">
                <input type="tel" id="" name="number" placeholder="Your Mobile No  ..">
                <input type="text" id="" name="designation" placeholder="Your Designation  ..">
                
                <input type="submit"  name="submit" value="Register">
                
               
                
            </form>
            <a href="login.php"><p>Click Here For Login</p></a>
        </div>

    </section>

    <?php
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $number=$_POST['number'];
        $designation=$_POST['designation'];
        

        $query="INSERT INTO register (name,email,number,designation) VALUES('$name','$email','$number','$designation')";
        $result=mysqli_query($connection,$query);
        if($result){
            header('location:login.php');
        }else{
            echo "registration failed";
        }
    }

    ?>

<!------------------------------------------- Footer Section --------------------------------------------->

    <footer>
        <div class="topfoot">
            <ul>
                <li><a href="index.html"> Home</a></li><li><span class="divider">&#8739</span></li>
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






</body>
</html>