<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRIPURA BUILDING & OTHER CONSTRUCTION WORKERS WELFARE BOARD</title>
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
        <div class="topnav">

            <div class="left-topnav">
                
            </div>
            <div class="right-topnav">
                <p><a href="mailto:tbocwwboard2007@gmail.com">tbocwwboard2007@gmail.com</a></p>
                <span class="dividertop">&#8739</span>
                <p> HelpLine: <a href="tel:03812383570">03812383570</a> </p>
            </div>

        </div>

        <div class="mainnav mainnav_home">
            <div class="left-mainnav">
                <a href="index.html"><img src="img/logo.png" alt=""></a>
            </div>
            <div class="right-mainnav">
                <h1>Online Labour Cess Collection Portal</h1>
                <h3>Tripura Building And Other Construction Workers Welfare Board</h3>
                <h3>Government Of Tripura</h3>
                
            </div>
            <div class="navbuttons">
                <a href="login.php"><button>User login</button></a>
                <a href="#"><button>Admin login</button></a>
                <a href="instructions.html"><button>Instructions</button></a>
            </div>
        </div>
        <div class="bottomnav">
            <marquee>Online Labour Cess Collection Portal. Tripura Building And Other Construction Workers Welfare Board. Government Of Tripura. Online Labour Cess Collection Portal. Tripura Building And Other Construction Workers Welfare Board .Government Of Tripura</marquee>
        </div>
    </section>
<!------------------------------------------- Banner Section --------------------------------------------->
    <section class="banner">

        <div class="slideshow-container">

            <div class="mySlides fade">
              
              <img src="img/1.jpg">
              
            </div>  
            
            <div class="mySlides fade">
              
              <img src="img/2.jpg">
              
            </div>
            <div class="mySlides fade">
              
                <img src="img/3.jpg">
                
            </div>
            <div class="mySlides fade">
              
                <img src="img/4.jpg">
                
            </div>
            <div class="mySlides fade">
              
                <img src="img/5.jpg">
                
            </div>
            
        </div>
            <br>
            
            <div class="dots" style="text-align:center">
              <span class="dot"></span> 
              <span class="dot"></span> 
              <span class="dot"></span> 
              <span class="dot"></span> 
              <span class="dot"></span> 
            </div>
          

    </section>

<!------------------------------------------- Body Section --------------------------------------------->

    <section class="main-body">

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

    <script>
        let slideIndex = 0;
        showSlides();
        
        function showSlides() {
          let i;
          let slides = document.getElementsByClassName("mySlides");
          let dots = document.getElementsByClassName("dot");
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
          }
          slideIndex++;
          if (slideIndex > slides.length) {slideIndex = 1}    
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " active";
          setTimeout(showSlides, 5000); // Change image every 5 seconds
        }
    </script>





</body>
</html>