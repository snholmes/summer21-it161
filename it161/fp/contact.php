<!DOCTYPE html>
<html lang="en">
 <head>
  <title>Art by Vonnie: Contact Form</title>
  <meta name="robots" content="noindex,nofollow" />
  <meta name="viewport" content="width=device-width" />
  <meta charset="utf-8" />
  <link rel="stylesheet" href="css/secondary.css" />
  <link rel="stylesheet" href="css/navsecondary.css" />
  <link rel="stylesheet" href="css/forms.css" />
 </head>
 <body>
   <header>
     <a href="template.html"><img class="logo" src="images/logo.jpg" alt="Art by Vonnie Logo"></a> 
     <div class="container">
      <div id="inner">
        <h1>Contact Me</h1>
      </div>
     </div>
     <nav class="topnav" id="myTopnav">
       <a href="galleries1and2.html">Gallery One</a>
       <a href="galleries3and4.html">Gallery Two</a>
       <a href="galleries5and6.html">Gallery Three</a>
       <a href="bio.html">Bio</a>
       <a href="contact.php" class="active">Contact</a>
       <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
     </nav>
   </header>
     
   <div class="wrapper">
       <h2 class="subheader">Contact Vonnie</h2>
       <div id="ctform">
       <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include '../includes/contact_include.php'; #site keys & code here
    
        $toAddress = "shelbynholmes@gmail.com";  //place your/your client's email address here
        $toName = "Vonnie Gaither"; //place your client's name here
        $website = "Art by Vonnie";  //place NAME of your client's website

        echo loadContact('simple.php');#demonstrates a simple contact form
        //echo loadContact('multiple.php');#demonstrates multiple form elements

	?>
      </div>
  <div id="contactinfo">
    <h3>Email:</h3>
    <p>artbyvonnie@gmail.com<br> vgvonnie@gmail.com
    <h3>Phone:</h3>
    <p>(907) 350-3065</p>
</div>

     <footer>
     <p><small>&copy; 2021 Art by Vonnie. Website created by Shelby Holmes. ~ 
          <a id="html-checker" href="#" target="_blank">Check HTML</a> ~ 
          <a id="css-checker" href="https://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Check CSS</a></small> ~ 
          <a id="disclaimer" href="disclaimer.html" class="active">Disclaimer</a>
     </p>
    </footer>
  </div>
     
  <script>
    //https://tinyurl.com/dynamic-html-checker
    document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);  
    
    //manages mobile nav 
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }   
 </script>
     
 </body>
</html>