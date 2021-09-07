<!DOCTYPE html>
<html long="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dynamic Website</title>
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
      <section class="main">
        <nav>
            <a href="#" class="logo">
                <img src="images/logo1.png"/>
            </a>

            <ul class="content">
                <li><a href="home.php">Home</a></li>
                <li><a href="feature.php">Feature</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php" class="active">contact</a></li>
                <li><a href="index.php">Main Menu</a></li>
          </ul>
        </nav>
    </section>
     
    <section class="contact">
        <div class="contact-heading">
            <h1>Contact Us</h1>
            <p>Lorem ipsum sit amet consectetur adipisicing elit.</p>
            
            
        </div>
        <form action="userinformation.php" method="post">
           <input type="text" name="user" placeholder="Your Full Name"/>
           <input type="email" name="email" placeholder="Your E-Mail"/>
           <textarea name="message" placeholder="Type Your Message Here..........."></textarea>
           <button class="main-btn contact-btn" type="submit">Continue</button>
         
        </form>

     </section>
 </body>
 </html>
