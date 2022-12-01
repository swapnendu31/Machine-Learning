<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div id="logo1"><img src="logo1.png" alt="Logo" width="150px" height="100px"></div>
        <div id="name">Hotel Moscow</div>
        <div id="name2">We are here to serve you...</div>
        <div id="logo2"><img src="logo1.png" alt="logo" width="150px" height="100px"></div>
    </header>
    <nav>
        <div>
        <a href="home.html">Home</a>
        <a href="" >About Us</a>
        </div>
        <?php
        <a href="" style =" top: 140px; position: absolute; right: 0;">admin</a>
        ?>
       
    </nav>
    <div class="container" >
        <div class="gap"></div>
                    <div id="size">
                        Table Available : <?php

                        ?>
                    </div>
                    <div class="book">
                        <form id="form-book" action="" method="post" target="_blank">
                         <label id="side1" for="date">Date of booking</label><br>
                         <input type="date" min="2022-12-06"><br>
                         <label id="side1" for="time">Time</label><br>
                         <input type="time"><br>
                         <label id="side1" for="no">No of Participant</label><br>
                         <input type="number"><br>
                         <label id="side1" for="details">About You And Your Guest's Likings</label><br>
                         <textarea id="side1" name="text" cols="35" rows="10"></textarea><br>
                         <button id="side1">Register</button>
                        </form>
                    </div>
        </div>
    <footer>
        <div id="conid"> 
         <div id="L1">
         <div class="under"> Contact us :</div> 
             Fax: 4758abcxyz <br> telephone: +31838xyzabc <br>
         </div>
     <div id="R1"> 
         <div class=" under">Email us :</div> 
         Hotel.Ma.aao@gmail.com
         </div> 
     <div id="M1">
         <div class="under"> Residental Address : </div>
           Apartment No. 420/C1,<br> Dulamore, Ukhra, Asansol <br>
         </div>
 </div>
         <p id="copy">© 2022 - 1977 Khulabazar.com</p>
  </footer>
</body>
</html>