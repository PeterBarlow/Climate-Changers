<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Contact Form</title>
</head>
</head>
<body>
	<div id="wrapper">
		<h1>CLIMATE<br>CHANGERS <span>INC.</span>
		</h1>  
		<p id="slogan">
			Keeping you one step ahead of the weather.
		</p>
		<h2>Climate Changers Inc. / 32441 Eagleset Ave. Agua Dulce, CA / 91390
		<br> Tel: 661 252 6922 / Fax 661 252 2348 / Email: cchangers@aol.com
		</h2>
		<div id="navbar">
			<nav>
				<ul>
  					<li><a href="index.html">home</a></li>
  					<li><a href="about.html">about</a></li>
  					<li><a href="reference.html">reference</a></li>
  					<li><a href="portfolio.html">portfolio</a></li>
  					<li><a href="contact.php">contact</a></li>
  				</ul>
			</nav>
		</div>
		 <section class="body">
    	<form method="post" action="contact.php">
        
    <label>Name</label>
    <input name="name" placeholder="Type Here">
            
    <label>Email</label>
    <input name="email" type="email" placeholder="Type Here">
            
    <label>Message</label>
    <textarea name="message" placeholder="Type Here"></textarea>

    <label>*What is 2+2? (Anti-spam)</label>
	<input name="human" placeholder="Type Here">
            
    <input id="submit" name="submit" type="submit" value="Submit">
        
</form>

    </section>
		<div id="footer">
			<footer>
				<p>&#169; Climate Changers, Inc. 2014</p>
			</footer>
		</div>
	</html>

<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: CCI contact form'; 
    $to = 'peterruelbarlow@gmail.com'; 
    $subject = 'Hello';
    $human = $_POST['human'];
			
    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
				
    if ($_POST['submit'] && $human == '4') {				 
        if (mail ($to, $subject, $body, $from)) { 
	    echo '<p class="Message">Thanks! Your message has been sent.</p>';
	} else { 
	    echo '<p class="Message">Something went wrong, go back and try again!</p>'; 
	} 
    } else if ($_POST['submit'] && $human != '4') {
	echo '<p class="Message">You answered the anti-spam question incorrectly!</p>';
    }
?>

