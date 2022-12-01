<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title style="font-family:Arial Narrow Bold;">Hotel Moscow</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="body">
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
        <a href="" >admin-login</a>
        </div>
    </nav>
    <div class="container" >
        <div class="content-about">
            <div class="about1">About Hotel Moscow</div>
            <p id = "col">_________________________________________</p>
            <br>
            <div class="about2">Hotel Moscow Hospitality is a quality driven collection of hotels & hotel apartments within one of the world's most 
                modern and fastest growing cities, Ukhra. <br>
 
                Welcome to Ukhra - Welcome to Hotel Moscow Hospitality, where our promise of pure value, pure quality and pure service is delivered.
                 
                An essential attribute of all Hotel Moscow Hospitality properties are their convenience and central locations. With a portfolio of 
                Seven Hotels and Deluxe Hotel Apartments, we have established a presence in major regions in Durgapur covering Deira, the Creek and the Airport. <br>
                 
                At Hotel Moscow Hospitality properties we provide a wonderful choice. Whether you are a discerning budget traveler or just looking 
                for that element of luxury of a 12 star business hotel, we have the accommodation solution to suite you. <br>
                 
                Our deluxe hotel apartments offer a choice of both full hotel service operations as well as self catering facilities. We
                 have an extensive choice of accommodations to choose from with a portfolio including standard hotel rooms, deluxe hotel 
                 suites, studios, One & Two Bed Room Apartments, Royal Suites, Executive & Privilege Floors.
                Committed to provide only the highest levels of comfort, quality accommodations and conference facilities has made Hotel Moscow 
                Hospitality Hotels and Hotel apartments ideal for leisure, corporate travelers, stopovers & long stays. Each and every stay 
                at one of our properties offers a high level of warmth and art of hospitality.
                <br><br>
                Lets Enjoy...
            </div>
        </div>
         <div class="content-form">
            <form id="form-home" action="input.php" method="post" target="_self">
                <label id="side1" for="name">Name:</label><br>
                <input type="text" name="name" ><br>
                <label for="email">Email</label><br>
                <input type="varchar" id="email"><br>
                <label id="side1" for="no">Contact Number</label><br>
                <input type="number" min="10" name="no"><br><br>

                <!-- <label id="side1" for="date">Date of booking</label><br>
                <input type="date" min="2022-12-06"><br>
                <label id="side1" for="time">Time</label><br>
                <input type="time"><br>
                <label id="side1" for="no">No of Participant</label><br>
                <input type="number"><br>
                <label id="side1" for="details">About You And Your Guest's Likings</label><br>
                <textarea id="side1" name="text" cols="35" rows="10"></textarea><br> -->
                <button type="submit"> <a href="book.php">Login / Sign up</a> </button>
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