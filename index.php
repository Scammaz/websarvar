<!DOCTYPE html>
<html lang="eng">
  
 <head>
        <title> Activities  </title>
        <link rel="stylesheet" type="text/css" href="stylemaine.css"> <!--external css-->
        <script src="validate/checkEmptyForm.js"> </script> <!--external javascript form check-->
        <script src="validate/validateName.js"></script> <!--external javascript name check-->  

</head>
    <body>
       

        <div class="centerref">
        <p>Welcome to the website designed to help people figure out what <br/> they can do when they are bored in Montreal </p>
            <p>This website will help you:</p>
            <ol>
                <li>Get creative date ideas</li>
                <li>Figure out what to do when you want to go out</li>
                <li>Learn about new places you can visit around the city</li>     
            </ol>
            <p>First, you need to tell us what your name is and how to join you:</p>
                <form name="subs" action="/action_page.php" method="get">
                    <div>
                        <br/>First Name<br/>
                        <input type="text" name="first" id="first" onkeyup="validateName(this)"> <br> <!--verifies for no spaces or # char-->
                        <br/>Last Name<br/>
                        <input type="text" name="last" id="last" onkeyup="validateName(this)"> <br/>
                        <br/><label for="mail">E-mail:</label><br/>
                        <input type="text" id="email" name="email">
                    </div>
              
            <p>Now tell us in which area of Montreal you live in</p>
                <input type="radio" name="location" value="bad"> North of Montreal / Laval / North Shore<br>
                <input type="radio" name="location" value="good"> Greater Montreal / Montreal / West Island<br>
                <input type="radio" name="location" value="other"> South Shore / Chateaugay / Saint-Constant<br><br>
                <button onclick="checkEmptyForm()">Submit Data</button> <!--checks function to verify for empty form-->
             </form> 
    </div>     
       <p>    
            <img src="Montreal.png" alt="Picture of the view from Mont-Royal" 
            class=centerwtv style="width:700px;height:390px;" 
            onmouseover="this.style.width='710px'; this.style.height='400px'; " 
            onmouseout="this.style.width='700px'; this.style.height='390px';" />
        </p>
    </body>

 

</html>


