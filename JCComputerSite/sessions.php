<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>
<html>
<head>	
<title>JC Computers Limited</title>
		<link rel="stylesheet" href="styleh.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>
<body>
	<!----Navigation Bar---->
<section id="nav-bar">	
<nav class="navbar navbar-expand-lg navbar-light ">
  <a class="navbar-brand" href="#"><img src="jc.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="welcome.php">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#session">COMPUTER SESSION</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#services">SERVICES</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="#print">PRINT FILE</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="#contactp2">CONTACT</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="logout.php">LOGOUT</a>
      </li>
    </ul>
  </div>
</nav>
</section>



<!------ Book Session------>
<section id="session">
	<div class="container">
	<h1>Book Computer Session</h1>
	<div class="row">
	<div class="col-md-6">
	<div class="session-content">
	On the right hand side you will be enterting your information to book a session with us.
	You will see an option for YourName, Contact, Date, Time and any extra message you have.
	<br><br>
	Follow the form to the right by:<br>
		-Your Name<br>
		-Phone Number<br>
		-Date<br>
		-Time<br>
		- Extra Message<br>
		<br>
		<img src="img/print1.jpg" width="450" height="250">
</div><br><br>
	<p>Successful Bookings</p>
		<div class="progress">
		<div class="progress-bar" style="width: 85%;">85%</div>
		
	
</div>
</div>
	
<div class="col-md-6">
<div class="session-content">
 <h2 class="text-center my-4">Book Session Here</h2>
 
<form class="contact-form">
<div class="form-group">
<label class="col-sm-4 col-lg-4">Your Name</label>
<input type="text" class="form-control" placeholder="Example John Smith">
</div>
                  
<div class="form-group">
<label class="col-sm-4 col-lg-4">Phone Number</label>
<input type="number" class="form-control" placeholder="Example +1868 02948532">
</div
            
<div class="form-group ">
<label class="col-sm-4 col-lg-4">Date</label>
<div class="col-sm-8 col-lg-8">
<input type="date"id="date"class="form-control"></div></div>

<div class="form-group ">
<label class="col-sm-4 col-lg-4">Time</label>
<div class="col-sm-8 col-lg-8">
<input type="time"id="time"class="form-control"></div></div>

<div class="form-group">
<label class="col-sm-4 col-lg-4">Extra Message</label>
<textarea class="form-control" rows="4" placeholder="Enter Your Message here"></textarea>
</div>
                
<div class="form-group row justify-content-end">
<div class="col-sm-5">
<button type="button" class="btn btn-primary">Submit</button>

</div>
</div>

</form>
</div>
</div>
	
</div>
</div>
</div>
</section>

<!------More Services------>
<section id="services">
<div class="container">
	<h1>More Services Below</h1>
	<div class="row services">
		<div class="col-md-3 text-center">
		<div class="icon">
		<i class="fas fa-desktop"></i>
		</div>
		<h3><a href="#session">Computer Sessions<a/></h3>
		<p>JC Computers offers a internet cafe where you can book your sessions online before you come in.</p>
		
</div>
<div class="col-md-3 text-center">
		<div class="icon">
		<i class="fas fa-archive"></i>
		</div>
		<h3><a href="#print">Printing Services</a></h3>
		<p>JC Computers offers printing services upload the files you want to be printed and collect them.</p>
		
</div>
<div class="col-md-3 text-center">
		<div class="icon">
		<i class="fas fa-gamepad"></i>
		</div>
		<h3>Gaming</h3>
		<p>We have our top secret gaming area for those who want to come and play videogames also</p>
		
</div>
<div class="col-md-3 text-center">
		<div class="icon">
		<i class="fas fa-archive"></i>
		</div>
		<h3>Customer Care</h3>
		<p>We can never forget to add that we appreciate all customers who do business and join the JC Family</p>
		
</div>
</div>
</div>
</section>

<!-----Printing----->
<section id="print">
<div class="container">
	<h1>Request File To Print</h1>
	<div class="row">
	<div class="col-md-6">
	<div class="session-content">
	<h2>Requirements  For Printing</h2>
	On the right hand side you will be entering your information uplaod the file you want printed to collect.
	Follow the requirements that are shown below to have a success file upload:<br><br>
	
	1)The customer shall only send <b>.jpg, .png, .docx, .xmls, pdf</b> files to print.<br>
	2)The customer shall not send a file over <b>10MB(MegaBytes)</b> to print.
	<br><br>
	<img src="img/flash.jpg" width="450" height="250">
	<br><br>
	<p>Successful Prints</p>
		<div class="progress">
		<div class="progress-bar" style="width: 90%;">90%</div>
</div>
	
</div>
</div>

<div class="col-md-6">
<div class="session-content">
 <h2 class="text-center my-4"> Upload Your File Here</h2>
 
<form class="contact-form">
<div class="form-group">
<label class="col-sm-4 col-lg-4">Your Name</label>
<input type="text" class="form-control" placeholder="Example John Smith">
</div>
                  
<div class="form-group">
<label class="col-sm-4 col-lg-4">Phone Number</label>
<input type="number" class="form-control" placeholder="Example +1868 02948532">
</div
            
<div class="form-group ">
<label class="col-sm-4 col-lg-4">Collection Date</label>
<div class="col-sm-8 col-lg-8">
<input type="date"id="date"class="form-control"></div></div>

<div class="form-group ">
<label class="col-sm-4 col-lg-4">Collection Time</label>
<div class="col-sm-8 col-lg-8">
<input type="time"id="time"class="form-control"></div></div>

<div class="form-group">
<label class="form-label" for="customFile">Upload Your File Here</label>
<input type="file" class="form-control" id="customFile" />
</div>
                
<div class="form-group row justify-content-end">
<div class="col-sm-5">
<button type="button" class="btn btn-primary">Submit</button>

</div>
</div>

</form>
</div>
</div>
	
</div>
</div>
</div>
</section>

<!------------Get in Touch--------->
<section id="contactp2">
	<div class="container">
		<h1>Contact Us Here</h1>
		<div class="row">
		<div class="col-md-6">
		<form class="contact-form">
		<div class="form-group">
		<input type="text" class="form-control" placeholder="Your Name">
		</div>
		<div class="form-group">
		<input type="number" class="form-control" placeholder="Phone No.">
		</div>
		<div class="form-group">
		<input type="email" class="form-control" placeholder="Email id">
		</div>
		<div class="form-group">
		<textarea class="form-control" rows="4" placeholder="Message"></textarea>
		</div>
			<button type="submit" class="btn btn-primary">SEND MESSAGE</button>
		</form>
		</div>
	<div class="col-md-6 contact-info">
		<div class="follow"><b>Address:</b><i class="fas fa-map-marker-alt"></i> ..Road,Curepe
		</div>
		
		
		<div class="follow"><b>Phone</b><i class="fas fa-phone"></i> +1 868 1234567
		</div>
		
		
		<div class="follow"><b>Email</b><i class="fas fa-envelope"></i> example@yahoo.com
		</div>
		
		<div class="follow"><label><b>Get Social:</b></label>
			<a href="#"><i class="fab fa-facebook"></i></a>
			<a href="#"><i class="fab fa-youtube"></i></a>
			<a href="#"><i class="fab fa-twitter"></i></a>
			<a href="#"><i class="fab fa-google-plus"></i></a>
		
	</div>
		
		
</div>
		
</div>	
</section>

<!------Footer-------->
	<section id="footerp2">
		<div class="container text-center">
		<p>See You Again Next Time<i class="fas fa-heart"></i></p>
<!---Footer--->

<!-----For Website Smoot Scrolling----->
<script src="js/smooth-scroll.js"></script>
<script>
	var scroll = new SmoothScroll('a[href*="#"]');
</script>