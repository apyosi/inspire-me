<!DOCTYPE html>
<html lang="en">
<head>
<title>Contact | InspireMeBrixton.co.uk</title>
<meta charset="utf-8">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="fontawesome/css/all.css">
<link rel="stylesheet" type="text/css" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<header class="header">
    <div class="logo"><img src="logo/logo.jpg" alt="InspireMe Logo"></div>
    <div class="SiteNameSlogn"><a href="index.html">InspireMeBrixton.co.uk</a>
      <p>Charity organisation based in Brixton London! Specialises in human development through motivational public
        speaking conferences!</p>
    </div>
    <div class="liveStream">
      <a href="https://www.youtube.com/embed/siyW0GOBtbo" target="_blank"><i class="fas fa-video"></i> Live Stream <i
          class="fas fa-microphone-alt"></i></a>
    </div>
  </header>
    
    <nav class="topnav">
    <a href="index.html"><i class="fas fa-home"></i> Home</a>
    <a href="about.html"><i class="fas fa-info-circle"></i> About</a>
    <a href="articles.html"><i class="far fa-newspaper"></i> News</a>
    <a href="guest-speakers.html"><i class="fas fa-user-friends"></i> Guest Speakers</a>
    <a href="quotes.html"><i class="fas fa-thumbs-up"></i> Inspirational quotes</a>
    <a href="contact.html" class="active"><i class="fas fa-envelope"></i> Contact</a>
    </nav>
    <div class="formMessage">
<p>Welcome <?php echo $_GET["name"]; ?></p>
<p>Your email address is: <?php echo $_GET["email"]; ?></p>
<p>Your telephone is: <?php echo $_GET["telephone"]; ?></p>
<p>Your subject is: <?php echo $_GET["subject"]; ?></p>
<p>Your Message is: <?php echo $_GET["message"]; ?></p>
</div>


<div class="row row2">
    <main class="contactForm">
      <h2>Contact Form:</h2>
      <form method="=get" action="contactform.php">
        <table>
          <tr>
            <td> <label>Name:</label></td>
            <td><input type="text" name="name" id="name" placeholder="Enter your name..." required></td>

          </tr>
          <tr>
            <td><label>Email:</label></td>
            <td><input type="email" name="email" placeholder="Enter your email..."></td>
          </tr>
          <tr>
            <td><label>Telephone:</label></td>
            <td> <input type="text" name="telephone" id="telephone" placeholder="Enter your telephone..."></td>
          </tr>
          <tr>
            <td><label>Subject:</label></td>
            <td> <input type="text" name="subject" id="subject" placeholder="Enter the subject..."></td>
          </tr>
          <tr>
            <td><label>Message:</label></td>
            <td><textarea name="message" id="message" placeholder="Write the message..."></textarea></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td> <input type="submit" value="Submit"> &nbsp;
              <input type="reset" value="Reset"> </td>
          </tr>
        </table>
      </form>
    </main>
    <aside class="address">
      <h2>Address:</h2>
      <p>Brixton Community Base</p>
      <p>Talma Road</p>
      <p>London SW2 1AS</p>
      <p>telephone:1234567890</p>
      <p>email:info@inspiremebrixton.co.uk</p>


      <h2>Opening Hours:</h2>
      <table id="OpeningHours">
        <tr>
          <td class="dayCol">Monday</td>
          <td class="hoursCol">8am - 10pm</td>
        </tr>
        <tr>
          <td class="dayCol">Tuesday</td>
          <td class="hoursCol">8am - 10pm</td>
        </tr>
        <tr>
          <td class="dayCol">Wednesday</td>
          <td class="hoursCol">8am - 10pm</td>
        </tr>
        <tr>
          <td class="dayCol">Thursday</td>
          <td class="hoursCol">8am - 10pm</td>
        </tr>
        <tr>
          <td class="dayCol">Friday</td>
          <td class="hoursCol">8am - 10pm</td>
        </tr>
        <tr>
          <td class="dayCol">Saturday</td>
          <td class="hoursCol">8am - 10pm</td>
        </tr>
        <tr>
          <td class="dayCol">Sunday</td>
          <td class="hoursCol">10am - 8pm</td>
        </tr>
      </table>
    </aside>
  </div>
  <div class="row row2">
    <div id="Map" class="map">
      <h2>Map:</h2>
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9943.925844984917!2d-0.12197304641989803!3d51.4584968101534!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf00568cc6a882a72!2sBrixton+Community+Base!5e0!3m2!1sen!2suk!4v1566429755548!5m2!1sen!2suk"
        width="100%" height="450" frameborder="0" style="border:0" allowfullscreen>
      </iframe>
    </div>
  </div>

  <footer class="footer">
    <a href="#"><i class="fab fa-facebook"></i></a>
    <a href="#"><i class="fab fa-twitter"></i></a>
    <a href="#"><i class="fab fa-google"></i></a>
    <a href="#"><i class="fab fa-linkedin"></i></a>
    <a href="#"><i class="fab fa-youtube"></i></a>
    <a href="#"><i class="fab fa-pinterest"></i></a>
    <a href="#"><i class="fab fa-snapchat-ghost"></i></a>
    <a href="#"><i class="fab fa-skype"></i></a>
    <a href="#"><i class="fab fa-android"></i></a>
    <a href="#"><i class="fab fa-stumbleupon"></i></a>
    <a href="#"><i class="fab fa-yahoo"></i></a>
    <a href="#"><i class="fab fa-reddit"></i></a>
    <p>Copyright 2019 by Anton Yosifov. All Rights Reserved</p>
  </footer>

</body>

</html>