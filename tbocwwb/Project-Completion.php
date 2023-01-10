<?php include "connection.php";?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Completion | NEW APPLICATION | TRIPURA BUILDING & OTHER CONSTRUCTION WORKERS WELFARE BOARD</title>
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
        $name=$_POST['name'];
        $date=$_POST['date'];
        $dateofcomplete=$_POST['dateofcomplete'];
        $cost=$_POST['cost'];
        $total_bill=$_POST['total_bill'];
        $bill_date=$_POST['bill_date'];
        //$cess_amount=$_POST['cess_amount'];
        //$cess_penalty=$_ POST['cess_penalty'];
        $total_amount=$_POST['total_amount'];
        //$work_order=$_POST['work_order'];
        $paymentmode=$_POST['paymentmode'];
    
    
    
        $query="INSERT INTO `payment`(name,date,dateofcomplete,cost,total_bill,bill_date,total_amount,paymentmode) VALUES(' $name',' $date','$dateofcomplete','$cost','$total_bill','$bill_date','$total_amount','$paymentmode')";
        $result= mysqli_query($connection,$query);
      if($result){
        header('location:new-application.php');
      }
      else{
        echo "data is incorrect";
      }
     }
   
   
   ?>



<section class="registration-sec">
        

        <div class="main-box">
            <h2>Project Completion Form</h2>
            <form action=""  method="post">
                <label for=""> Name of Work<span class="requerd-fild">*</span></label><br>
                <input type="text" id="" name="name" placeholder="" class="application-input" required>
                <br><br>
                <div class="appli-flex">
                    
                    <div>
                        <label for=""> Date of commencement with period of work <span class="requerd-fild">*</span></label><br>
                        <input type="date" id="" name="date" placeholder="" class="half-input" required>
                    </div>
                    <div>
                        <label for="">Date of Completion of work<span class="requerd-fild">*</span> </label><br>
                        <input type="date" id="" name="dateofcomplete" placeholder="" class="half-input" required>
                    </div>
                </div>
                <br>
                <label for=""> Cost of construction (including Contingency, transport cost of materials except land cost and other Govt. taxes ) : Rs<span class="requerd-fild">*</span></label><br>
                <input type="text" id="" name="cost" placeholder="" class="application-input" required>
                <br><br>
                <label for="">Total Bill amount /Bill expenditure incurred till date <span class="requerd-fild">*</span></label><br>
                <input type="text" id="" name="total_bill" placeholder="" class="application-input" required>
                <br><br>
                <div class="appli-flex">
                    <div>
                        <label for="">Date of bill payment <span class="requerd-fild">*</span> </label><br>
                        <input type="date" id="bill_date" name="bill_date" placeholder="" class="half-input" required>
                    </div>
                    <div>
                        <label for=""> Amount of Cess (1% of total cost)   </label><br>
                        <input type="text" id="" name="cess_amount" placeholder="" class="half-input" readonly>
                    </div>
                </div>
                <br>
                <label for="">2% Penalty (if Cess is not paid within 30 days from the completion of work /final bill paid whichever is earlier ): Rs </label><br>
                <input type="text" id="" name="cess_penalty" placeholder="" class="application-input" readonly>
                <br><br>
                <div class="appli-flex">
                    
                    <div>
                        <label for="">   Total amount payable: Rs<span class="requerd-fild">*</span> </label><br>
                        <input type="text" id="" name="total_amount" placeholder="" class="half-input" required>
                    </div>
                    <div>
                        <label for="">   Upload Work Order   </label><br>
                        <input type="file" name="work_order" id="">
                    </div>
                    <div>
                        <label for="">  Mode of payment <span class="requerd-fild">*</span> </label><br>
                        <select id="" name="paymentmode" required>
                            <option value="">Select One Mode</option>
                            <option value="Online">Online</option>
                            <option value="Offline">Offline</option>
                            
                          </select>
                    </div>
                </div>

                <br>
                <input type="submit" name="submit" value="Pay / Download challan" class="pay-btn">
                
               
                
            </form>
        </div>

    </section>

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


    <!-------------------- Banner Slider ----------------------->





</body>
</html>