<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>African Rise | Contact Us</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;1,200;1,300;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <section class="sub-header">
      <!-- NAVIGATION BAR-->
      <nav>
        <a href="index.html"><img src="Images/RISE1.png" width="200px"></a>
        <div class="navbar" id="nav-bar">
          <i class="fa fa-times" onclick="hideMenu()"></i>
          <ul>
            <li><a href="index.html">HOME</a></li>
            <li><a href="blog.html">BLOG</a></li>
            <li><a href="contact.html">CONTACT</a></li>
          </ul>
        </div>
        <i class="fa fa-bars" onclick="showMenu()"></i>
      </nav>
      <div class="textbox1">
        <h1 >Contact Us</h1>
        <p>Welcome to our NGO and thank you for trusting us. Write to us your feedback on us through our form below.</p>
      </div>
   </section>

   <!---    CONTACT US FORM --->
   <section class="contact1">
     <div class="contactus1">
       <form  action="contactform.php" method="post">
         <div class="form-group">
           <label for="firstName">First Name</label>
           <input type="text" id="firstName" name="firstName" placeholder="Enter your first name" required>
         </div>
         <div class="form-group">
           <label for="lastName">Last Name</label>
           <input type="text"  id="lastName" name="lastName" placeholder="Enter your Last name" required>
         </div>
         <div class="form-group">
           <label for="phonenumbers">Phone Numbers</label>
           <input type="number"  id="phonenumbers" name="phonenumbers" placeholder="+255 687 883 XXX" required>
         </div>
         <div class="form-group">
           <label for="email"> Email</label>
           <input type="email" id="email" name="email" placeholder="enteryour@email.com" required>
         </div>
         <div class="form-group">
           <label for="message">message</label>
           <textarea name="message" id="message" rows="8" cols="60" placeholder="enter your message" required></textarea>
         </div>
         <button type="submit" name="submit">submit</button>
       </form>
     </div>
   </section>


       <!---  OUR TEAM --->
    <section class="ourteam">
      <h1 style="color: maroon;">Our Team</h1>
      <div class="row">
        <div class="ourteam-col">
           <figure>
               <img src="Images/ceo.jpg" height="440px">
               <div class="layer1">
                 <h4>Savio Sylivester Kalinga </h4>
               </div>
               <figcaption>Fonder & C.E.O</figcaption>
           </figure>
        </div>
        <div class="ourteam-col">
          <figure>
            <img src="Images/debora.jpg" height="440px">
            <div class="layer1">
              <h4>Debora Yesaya Edson</h4>
            </div>
            <figcaption>C.O.O</figcaption>
          </figure>
        </div>
        <div class="ourteam-col">
          <figure>
            <img src="Images/william.jpg" height="440px">
            <div class="layer1">
              <h4>William Narcis Lyangoo</h4>
            </div>
            <figcaption>Ass C.O.O</figcaption>
          </figure>
        </div>
      </div>
      <div class="row">
        <div class="ourteam-col">
          <figure>
            <img src="Images/mponjoli1.jpg" height="500px">
            <div class="layer1">
              <h4>Mponjoli Joseph</h4>
            </div>
            <figcaption>Digital Content Director </figcaption>
          </figure>
        </div>
        <div class="ourteam-col">
          <figure>
            <img src="Images/aziara1.jpg" height="500px">
            <div class="layer1">
              <h4>Aziara Ayoub Ahmed</h4>
            </div>
            <figcaption>Buisness strategiest & Designer</figcaption>
          </figure>
        </div>
        <div class="ourteam-col">
          <figure>
            <img src="Images/angel.jpg" height="500px">
            <div class="layer1">
              <h4>Angelina Alfred Tarimo</h4>
            </div>
            <figcaption>Ambassador </figcaption>
          </figure>
        </div>

      </div>

    </section>


     <!--- FOOTER--->
     <section class="footer">
       <h4 style="color: maroon;">About Us</h4>
       <p>We help, educate, empower, motivate and rise-awareness on youth, because the youth are the<br> future generation. For more informations visit our about page.</p>
       <div class="icons">
         <i class="fa fa-facebook"></i>
         <i class="fa fa-twitter"></i>
         <i class="fa fa-instagram"></i>
         <i class="fa fa-whatsapp"></i>

       </div>
       <p><i class="fa fa-copyright"></i> African Rise</p>
     </section>
        <!-- JAVASCRIPT FOR TOGGLE MENU-->
    <script>
    var navbar = document .getElementById("nav-bar");

    function showMenu() {
      navbar.style.right = "0" ;
    }
    function hideMenu() {
      navbar.style.right = "-200px" ;
    }
    </script>
  </body>
</html>
