<?php
include  "connection.php";?>

<?php 
session_start();
 
//include "session.php";

?>

 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEW APPLICATION | TRIPURA BUILDING & OTHER CONSTRUCTION WORKERS WELFARE BOARD</title>
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
        <div class="top-manu">
            <div>
                <a href="history.php"> <button>PAYMENT HISTORY</button></a>
                <a href="new-application.php"><button class="manu-active">NEW APPLICATION</button></a>
            </div>
            
            <a href="logout.php" class="logout-box"><i class="fa-solid fa-power-off"></i><span>LOGOUT</span></a>
        </div>
    </section>



<!------------------------------------------- Main Section --------------------------------------------->
<?php

 if(isset($_POST['submit'])){
    $number=$_POST['number'];
    $name=$_POST['name'];
    $district=$_POST['district'];
    $subdiv=$_POST['subdiv'];
    $block=$_POST['block'];
    $town=$_POST['town'];
    $scenario=$_POST['scenario'];


    $query ="INSERT INTO `newapplication`(name,district,subdiv,block,town,scenario) values ('$name','$district','$subdiv','$block','$town','$scenario')";
    $result= mysqli_query($connection,$query);

    $redir="Part-Payment";
    switch($scenario)
     {
        case  " Project Completion": $redir ="Project-Completion"; break;
        case   "Part Payment ": $redir ="Part-Payment";break;
        case   "Advance cess Payment"; $redir ="Advance-cess-Payment";break;
        default: echo("error");exit();break;
     }
    // echo " redirecting to: $redir ";
 // echo "$scenerio";*/

      
    if($result)
    {
        header("Location: " . $redir. ".php");
    }else{
    die(mysqli_error()); 
    }


 }


?> 

    <section class="registration-sec">

        <div class="main-box">
            <h2>Applications for Cess Payments</h2>
            <form action="new-application.php" method="POST">
            


                 
               <input type="hidden" name="number" value=" ">
                <label for="">  Name of establishment/ Name of payee <span class="requerd-fild">*</span></label><br>
                <input type="text" id="" name="name" placeholder="" class="application-input" required>
                <br><br>
                <div class="appli-flex">
                    <div>
                        <label for="">   District<span class="requerd-fild">*</span> </label><br>
                        <select id="" name="district" required>
                            <option value="">Select District</option>
                            <option value="South">South</option>
                            <option value="North">North</option>
                            <option value="Gomati">Gomati</option>
                          </select>
                    </div>
                    <div>
                        <label for="">   Sub-division<span class="requerd-fild">*</span> </label><br>
                        <select id="" name="subdiv" required>
                            <option value="">Select Sub-division</option>
                            <option value="Dharmanagar">Dharmanagar</option>
                            <option value="Kanchanpur">Kanchanpur</option>
                            <option value="Panisagar">Panisagar</option>
                          </select>
                    </div>
                    <div>
                        <label for="">  Block/NP/MC/GP/Ward <span class="requerd-fild">*</span></label><br>
                        <select id="" name="block" required>
                            <option value="">Select Block/NP/MC/GP/Ward</option>
                            <option value="Kalacherra">Kalacherra</option>
                            <option value="Laljuri">Laljuri</option>
                            <option value="	Jampui Hills">	Jampui Hills</option>
                          </select>
                    </div>
                    <div>
                        <label for="">  Town/ Village<span class="requerd-fild">*</span></label><br>
                        <input type="text" id="" name="town" placeholder="" class="town-input" required>
                    </div>
                </div>
                <br>

                <label for="">   Choose Scenario <span class="requerd-fild">*</span></label><br>
                        <select id="" name="scenario" required>
                            <option value=""> Select Scenario</option>
                            <option value=" Project Completion"> Project Completion</option>
                            <option value="Part Payment ">Part Payment </option>
                            <option value="Advance cess Payment">Advance cess Payment</option>
                        </select>


                <br><br>
                <input type="submit" value="NEXT"  name="submit">
                
               
                
            </form>
        </div>

    </section>

<!------------------------------------------- Footer Section --------------------------------------------->

    <footer>
        <div class="topfoot">
            <ul>
                <li><a href="index.php"> Home</a></li><li><span class="divider">&#8739</span></li>
                <li><a href="copyright.php"> Copyright</a></li><li><span class="divider">&#8739</span></li>
                <li><a href="">Feedback</a> </li><li><span class="divider">&#8739</span></li>
                <li><a href="hyperlink.php"> Hyperlinking Policy</a></li><li><span class="divider">&#8739</span></li>
                <li><a href="privacypolicy.php"> Privacy Policy</a></li><li><span class="divider">&#8739</span></li>
                <li><a href="termscondition.php"> Terms & Conditions</a></li><li><span class="divider">&#8739</span></li>
                <li><a href="faq.php">FAQ</a></li><li><span class="divider">&#8739</span></li>
                <li><a href="contact.php"> Contact Us</a></li>
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