<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
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
<script>alert('Welcome')</script>
<section id="nav-bar">	
<nav class="navbar navbar-expand-lg navbar-light ">
  <a class="navbar-brand" href="#"><img src="jc.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#top">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">ABOUT US</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#services">SERVICES</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="#testimonials">TESTIMONIALS</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="#contact">CONTACT</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="logout.php">LOGOUT</a>
      </li>
    </ul>
  </div>
</nav>
</section>

<!------Slide Show------->
	<div id="slider">
	<div id="headerSlider" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#headerSlider" data-slide-to="0" class="active"></li>
    <li data-target="#headerSlider" data-slide-to="1"></li>
    <li data-target="#headerSlider" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
   <div class="carousel-item active">
      <img class="d-block w-100" src="img/lab.jpg">
	  <div class="carousel-caption">
	  <h5>Book Your Session Right Now</h5>
	  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/printer.jpg">
	  <div class="carousel-caption">
	  <h5>Professional Printing</h5>
	  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/office.jpg">
	  <div class="carousel-caption">
	  </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#headerSlider" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#headerSlider" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>	
<!-----About------>
<section id="about">
<div class="container">
<div class="row">
<div class="col-md-6">
	<h2>About Us</h2>
	<div class="about-content">
	JC Computers is an Internet Cafe/Printing Business/Gaming Area that was
	 established themselves in Curepe as a staple in the community. The business was founded in 2017 by
	 some university friends who were still in school who had a common goal of a place where people can
	 come to interact and also be provided services that they enjoy and have interest in. Jc Computers serves
	 a wide demographic from people seeking information to print out to people wanting to serf the internet for
	 their own reasons. We are usually open throughout the week from 8:00am - 4:00pm.
    </div>
	<button type="button" class="btn btn-primary">Read more>></button>

</div>
<div class="col-md-6">
		<p>Successful Bookings</p>
		<div class="progress">
		<div class="progress-bar" style="width: 85%;">85%</div>
</div>

		<p>Successful Prints</p>
		<div class="progress">
		<div class="progress-bar" style="width: 90%;">90%</div>
</div>

</div>
</div>
</section>

<!-----Services---->
<section id="services">
<div class="container">
	<h1>Our Services Below</h1>
	<div class="row services">
		<div class="col-md-3 text-center">
		<div class="icon">
		<i class="fas fa-desktop"></i>
		</div>
		<h3><a href="sessions.php">Computer Sessions<a/></h3>
		<p>JC Computers offers a internet cafe where you can book your sessions online before you come in.</p>
		
</div>
<div class="col-md-3 text-center">
		<div class="icon">
		<i class="fas fa-archive"></i>
		</div>
		<h3><a href="sessions.php">Printing Services</a></h3>
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

<!---------Testimonials---->
<section id="testimonials">
<div class="container">
		<h1>Testimonials</h1>
		<p class="text-center">How JC Computers has impacted the community</p>
<div class="row">
	<div class="col-md-4 text-center">
		<div class="profile">
		<img src="img/profile3.jpg" class="user">
		<blockquote>- JC Computers has made it easier for me to come and collect what is need to without standing in a waiting line. -</blockquote>
		<h3>Ronique Mc Clatchie <span> - First Ever Customer - </span></h3>
		</div>
		</div>
	<div class="col-md-4 text-center">
		<div class="profile">
		<img src="img/profile2.jpg" class="user">
		<blockquote> - This business has become more than just a place for printing and a internet cafe but a beacon to the community and is worth investing in. -</blockquote>
		<h3>Zachary Cadette <span> - Business Invester - </span></h3>
		</div>
		</div>
	<div class="col-md-4 text-center">
		<div class="profile">
		<img src="img/profile.jpg" class="user">
		<blockquote>- Making this information system has been a pleasure and i know how much it will benifit the community -</blockquote>
		<h3>Jamal Prince <span> -  Web Designer/Programmer - </span></h3>
		</div>
		</div>
		</div>
		</div>
</section>	

<!------------Get in Touch--------->
<section id="contact">
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
	<section id="footer">
		<div class="container text-center">
		<p>See You Again Next Time<i class="fas fa-heart"></i></p>
<!---Footer--->

<!-----For Website Smoot Scrolling----->
<script src="js/smooth-scroll.js"></script>
<script>
	var scroll = new SmoothScroll('a[href*="#"]');
</script>

</body>
</html>	