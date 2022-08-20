<?php

    $nickname = $_POST['nickname'];
    $email = $_POST['email'];
    $textarea = $_POST['message'];

    $mailheader = "From:".$name."<".$email.">\r\n";

    $recipiant = "yruwebs@gmail.com";

    mail($recipiant, $textarea, $mailheader)
    or die ("Error");

    echo'
    <!DOCTYPE html>
<html>
      <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Yru's Personal Website</title>
      <link rel="stylesheet" href="style.css">
      </head>

      <body>
        <nav>
            <h1><b>Yru</b></h1>
                   <div class="nav-links">
                         <ul>
                              <li>
                                   <a href="index.html">Home</a>
                                   <a href="social.html">Social</a>
                                   <a href="about.html">About</a>
                                   <a href="email.html">Contact me</a>
                               </li> 
                         </ul>           
                     </div> 
               </nav> 
        <div class="messagesentpage">
            <h1>Message sent!</h1>
            <div class="backktohome">
                <a href="https://yruwebs.github.io/Personal-web/">Wag mo Click mo</a>
            </div>
        </div>
        <footer>
            <div class="footer-container">
                 <h3>Replayan kita mamaya :></h3>
            </div>
            <small>made by Yrupogi</small>
        </footer>

      </body>
</html>
    ';
?>