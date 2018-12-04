<?php

include('connection.php');


//session_start();

//$id =$_GET['id'];

//echo $id;

if( isset( $_POST["submit"] ) ) {
        
    // build a function that validates data
    function validateFormData( $formData ) {
        $formData = trim( stripslashes( htmlspecialchars( $formData ) ) );
        return $formData;
    }

    // set all variables to empty by default
    $name = $email = $message = "";
    
    // check to see if inputs are empty
    // create variables with form data
    // wrap the data with our function
    
    if( !$_POST["name"] ) {
        $nameError = "Please enter a name <br>";
    } else {
        $name = validateFormData( $_POST["name"] );
    }

    if( !$_POST["email"] ) {
        $emailError = "Please enter your email <br>";
    } else {
        $email = validateFormData( $_POST["email"] );
    }

    if( !$_POST["message"] ) {
        $messageError = "Please enter a message <br>";
    } else {
        $message = validateFormData( $_POST["message"] );
    }
    
    //$name = $_POST['name'];
   // $email = $_POST['email'];
   // $message = $_POST['message'];
   
    // check to see if each variable has data
    if( $name && $email && $message) {
        $query = "INSERT INTO quakereport(name, email, message) VALUES ('$name','$email','$message')";

      //mysqli_query($conn,"INSERT INTO recruiter (name,email,message) 
//VALUES ('$name','$email','$message')");
      //  mysqli_query($conn,$query);
        if( mysqli_query( $conn, $query ) ) {
            echo "<div class='alert alert-success'>New record in database!</div>";
        } else {
            echo "Error: ". $query . "<br>" . mysqli_error($conn);
        }
    
        

    }
    
}

    mysqli_close($conn);


?>



<html>
	<head>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>   
        
        <!-- Quake Text -->
          <script type = "text/javascript" src = "http://code.jquery.com/jquery-1.9.1.min.js"></script>
          <script type = "text/javascript" src = "js/jwquaketext.js"></script>
        
        
        <!--<script type="text/javascript">  
            
      
            
        $(document).ready(function() {                      
        $("#submit").click(function(e) {                 
        e.preventDefault();  
        var idemail = $("#idemail").val(),  
        name = $("#name").val(),                     
        email = $("#email").val(),                     
        message = $("#message").val();                          
        $.ajax({                     
        type: "POST",                     
        url: ' https://ass5p6u8bc.execute-api.us-east-1.amazonaws.com/v1/newemailprocessor',                 
        contentType: 'application/json',      
        data: JSON.stringify({                         
        'name': name,                         
        'email': email,                         
        'message': message                     
        }),                     
        success: function(res){                         
        $('#form-response').html('<div class="alert alert-info" role="alert">Welcome to the queue! Your path will begin shortly...</div>');},                     
        error: function(){
         $('#form-response').html('<div class="alert alert-info" role="alert">Something went wrong... We are working on it!</div>');                     }}); }) });      
        </script>-->
		<title><?php echo "Earthquake Monitoring";?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
        
     <!-- <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
        
        
        
        
        
        <link rel="stylesheet" type="text/css" href="responsiveform.css">
        <link rel="stylesheet" media="screen and (max-width: 1200px) and (min-width: 601px)" href="responsiveform1.css" />
        <link rel="stylesheet" media="screen and (max-width: 600px) and (min-width: 351px)" href="responsiveform2.css" />
        <link rel="stylesheet" media="screen and (max-width: 350px)" href="responsiveform3.css" />
        
        
        
        
	</head>
    
	<body>

		<!-- Header -->
			<header id="header" class="alt">
				<div class="logo"><a href="index.php"><?php echo "Earthquake";?> <span>Monitoring &amp; Detection</span></a></div>
				<a href="#menu">Menu</a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.php">Home</a></li>
					<li><a href="generic.html">Generic</a></li>
					<!--<li><a href="elements.html">Elements</a></li>-->
				</ul>
			</nav>

		<!-- Banner -->
			<section class="banner full">
				<article>
					<img src="images/earthquake-insurance.jpg" alt="" />
					<div class="inner">
						<header>
							<p>Earthquake &amp;  <a href="https://templated.co"><?php echo "Fault Rupture";?></a></p>
							<h2><?php echo "Earthquakes"; ?></h2>
						</header>
					</div>
				</article>
				<article>
					<img src="images/Faults_in_Moenkopi_Formation_Moab_Canyon_Utah_USA_01-e1494992495928.jpg" alt="" />
					<div class="inner">
						<header>
							<p><?php echo "Normal Fault System"; ?></p>
							<h2><?php echo "Ground Deformation"; ?></h2>
						</header>
					</div>
				</article>
				<article>
					<img src="images/Corbis-RM-volcano-erupting-Kamchatka-Russia-1550x804.jpg"  alt="" />
					<div class="inner">
						<header>
							<p>Sed cursus aliuam veroeros lorem ipsum nullam</p>
							<h2>Tempus dolor</h2>
						</header>
					</div>
				</article>
				<article>
					<img src="images/san_andreas_fault_carrizo_plain.jpg"  alt="" />
					<div class="inner">
						<header>
							<p>Strike Slip Fault System</p>
							<h2>San Andreas Fault</h2>
						</header>
					</div>
				</article>
				<article>
					<img src="images/Mount_Everest_as_seen_from_Drukair2_PLW_edit.jpg"  alt="" />
					<div class="inner">
						<header>
							<p>Thrust Fault System</p>
							<h2>Himalayas Mountain</h2>
						</header>
					</div>
				</article>
			</section>

		<!-- One -->
			<section id="one" class="wrapper style2">
				<div class="inner">
					<div class="grid-style">

						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/gty_japan_earthquake_07_jc_160416_20x13_1600.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<p>Kumamoto prefecture, southern Japan, April 19, 2016</p>
										<h2>2016 Major Earthquake </h2>
									</header>
									<p> The Aso Ohashi Bridge is seen washed away by a landslide on April 16, 2016 in Minamiaso, Kumamoto, Japan. The land slide is due to the earthquakes in the village of Minami-Aso in Kumamoto prefecture on April 18, 2016.More than 100,000 evacuees, some sleeping in their cars and others in gymnasiums or community centers, were bracing for another chilly night. Many people are afraid to stay in their homes.</p>
									<footer class="align-center">
										<a href="#" class="button alt">Learn More</a>
									</footer>
								</div>
							</div>
						</div>

						<div>
							<div class="box">
								<div class="image fit">
									<img src="images/2011_Tohoko_Earthquake.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<p>6.3 Richter scale earthquake that struck Chiang Mai and many other areas in Northern Thailand</p>
										<h2>2014 Intermediate Earthquake</h2>
									</header>
									<p> Following the 6.3 Richter scale earthquake that struck Chiang Mai and many other areas in Northern Thailand on 5 May, Dr. Bhichit Rattakul, Special Advisor to Asian Disaster Preparedness Center talks to Radio Thailand. He emphasizes the critical need for the development of an early warning system for earthquakes and studies into current building infrastructure in vulnerable areas like Bangkok. </p>
									<footer class="align-center">
										<a href="#" class="button alt">Learn More</a>
									</footer>
								</div>
							</div>
						</div>

					</div>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
						<p>The Himalayan mountain range and Tibetan plateau have formed as a result of the collision between the Indian Plate and Eurasian Plate which began 50 million years ago and continues today.</p>
						<h2>Himalayan mountain range and Tibetan plateau</h2>
					</header>
				</div>
			</section>

		<!-- Three -->
			<section id="three" class="wrapper style2">
				<div class="inner">
					<header class="align-center">
						<p class="special">Deformation in the boundary zone between tectonic plates is the fundamental cause of earthquakes around the world</p>
						<h2>Geologic Hazards: Earthquakes, Tsunami, Volcanic Eruptions</h2>
					</header>
					<div class="gallery">
						<div>
							<div class="image fit">
								<a href="#"><img src="images/haiti-earthquakejpg-pic01.jpg" alt="" /></a>
							</div>
						</div>
						<div>
							<div class="image fit">
								<a href="#"><img src="images/hawaii-kilauea-eruption.jpg" alt="" /></a>
							</div>
						</div>
						<div>
							<div class="image fit">
								<a href="#"><img src="images/Kilbourne-Hole-aerial-looking-at-Mount-Riley-and-East-Potrillos-Sergio-Moreno-1024x768.jpg" alt="" /></a>
							</div>
						</div>
						<div>
							<div class="image fit">
								<a href="#"><img src="images/Japan_Great_Earthquake.jpg" alt="" /></a>
							</div>
						</div>
					</div>
				</div>
			</section>

        <!----------------------     FORM CODE -------------------------------->
 
<!--<header class="align-center">-->
						<!--<p class="special">Deformation in the boundary zone between tectonic plates is the fundamental cause of earthquakes around the world</p>-->
						  <!--<h2>Report an Earthquake</h2>-->
    
                    
<!--</header>-->
        
    <!--<form method="POST" action="index.php">-->
      
        <!--<div class="form-label-group">--> 
        <!--<input type="text" id="idemail" class="form-control:" required> 
        <label for="idemail" class="control-label">ID</label> -->
       <!-- <input type="text" name="name" id="name" class="form-control:" required> 
        <label for="name" class="control-label">Name</label> 
        </div> 
        <div class="form-label-group"> 
        <input type="text" name="email" id="email" class="form-control" required> 
        <label for="email" name="email" class="control-label">Email address</label> </div> 
        <div class="form-label-group"> 
        <textarea id="message" name="message" rows="3" class="form-control" placeholder=”Message”></textarea>
        </div> 
        <div id="form-response"></div> 
        <button class="btn btn-lg btn-primary btn-block" name="submit" id="submit" type="submit" style="background-color:#28547C;">Request Demo</button>
    </form>-->

        
        <!-------------------------- FORM CODE --------------------------------->

        
		<!-- Footer -->
			<footer id="footer">
				<div class="container">
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-envelope-o"><span class="label">Email</span></a></li>
					</ul>
				</div>
				<div class="copyright">
					&copy; Lennox E. Thompson. All rights reserved.
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>