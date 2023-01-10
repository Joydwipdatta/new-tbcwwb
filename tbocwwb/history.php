<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAYMENT HISTORY | TRIPURA BUILDING & OTHER CONSTRUCTION WORKERS WELFARE BOARD</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="query.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/4ebe883bff.js" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
        $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myTable tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
        });
    </script>

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
                <a href="#"> <button class="manu-active">PAYMENT HISTORY</button></a>
                <a href="new-application.php"><button>NEW APPLICATION</button></a>
            </div>
            
            <a href="" class="logout-box"><i class="fa-solid fa-power-off"></i><span>LOGOUT</span></a>
        </div>
    </section>
<!------------------------------------------- Main Section --------------------------------------------->
    <section class="registration-sec">

        <div class="history-box">
            <div class="table-head">
                <h2>Payment History</h2>
                <input id="myInput" type="text" placeholder="Search..">
            </div>
           
            <div class="history-tb">
            <table>
                <thead>
                    <tr>
                        <th>Reference ID</th>
                        <th>Scenario</th>
                        <th>Name of Work</th>
                        <th>Name of Establishment</th>
                        <th>Date of Payment</th>
                        <th>Receipt Id</th>
                        <th>Transaction Id</th>
                        <th>payment mode</th>
                        <th>View</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                    <tr>
                        <td>10045</td>
                        <td>Part Payment</td>
                        <td>Building and Road maintenance</td>
                        <td>Rakesh Saha</td>
                        <td>10/11/2022</td>
                        <td>PON2022001</td>
                        <td>TBOCWWB2201</td>
                        <td>Online</td>
                        <td>
                            <a href="history-details.php"><i class="fa-regular fa-eye"></i></a>
                        </td>
                    </tr>

                    <tr>
                        <td>10048</td>
                        <td>Project Completion</td>
                        <td>Cane/Reed work</td>
                        <td>Suman Das</td>
                        <td>18/11/2022</td>
                        <td>POFF2022002</td>
                        <td>TBOCWWB2202</td>
                        <td>Offline</td>
                        <td>
                            <a href="history-details.php"><i class="fa-regular fa-eye"></i></a>
                        </td>
                    </tr>
                    
                </tbody>
            </table>
            </div>

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