<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body id="myPage">
<?php include 'header.php';?>
<div class="w3-container w3-padding-64 w3-theme-l5" id="contact">
  <div class="w3-row">
    <div class="w3-col m5">
    <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">Contact Us</span></div>
      <h3>Address</h3>
      
      <p><i class="fa fa-map-marker w3-text-teal w3-xlarge"></i>  Kolkata,India</p>
      <p><i class="fa fa-phone w3-text-teal w3-xlarge"></i>  +91 1234123412</p>
      <p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i>  hms@test.com</p>
    </div>
    <div class="w3-col m7">
      <form class="w3-container w3-card-4 w3-padding-16 w3-white" action="/action_page.php" target="_blank">
      <div class="w3-section">      
        <label>Name</label>
        <input class="w3-input" type="text" name="Name" required>
      </div>
      <div class="w3-section">      
        <label>Email</label>
        <input class="w3-input" type="text" name="Email" required>
      </div>
	  <div class="w3-section">      
        <label>Mobile no.</label>
        <input class="w3-input" type="int" name="mobile" required>
      </div>
      <div class="w3-section">      
        <label>Message</label>
        <input class="w3-input" type="text" name="Message" required>
      </div>  
      <input class="w3-check" type="checkbox" checked name="Like">
      <label>I Like it!</label>
      <button type="submit" class="w3-button w3-right w3-theme">Send</button>
      </form>
    </div>
  </div>
</div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7375.970300417258!2d87.85713649413452!3d22.42958473740447!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a02980f348baecb%3A0x28de83215d5d33b2!2sKTPP+Medical+Unit!5e0!3m2!1sen!2sin!4v1524900548989" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
<?php include 'footer.php';?>
</body>
</html>
