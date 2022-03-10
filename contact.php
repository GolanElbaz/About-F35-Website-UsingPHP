<?php

if( isset( $_REQUEST['reg_btn']) ) {
    
    $firstname = $_REQUEST['firstname'];
    $lastname = $_REQUEST['lastname'];
    $email = $_REQUEST['email'];
    $country = $_REQUEST['country'];
    $subject = $_REQUEST['subject'];
    
   
    
}
?>


<!DOCTYPE html>

<html>

<head>
<style>
.menu {
	list-style-type: none;
	margin: 0;
	padding: 0;
	overflow: hidden;
	background-color:  rgb(145, 149, 152);
}

.menu li {
	float: left;
}

.menu li a {
	display: block;
	color: white;
	text-align: center;
	padding: 16px;
	text-decoration: none;
	color: white;
}

.menu li a:hover {
	background-color: rgb(76, 119, 153);
}

h1 {
	text-align: center;
	background-color:rgb(76, 119, 153);
	border: 3px solid black;
	color: white;
}

input[type=text], select, textarea {
	width: 100%; /* Full width */
	padding: 12px; /* Some padding */
	border: 1px solid #ccc; /* Gray border */
	border-radius: 4px; /* Rounded borders */
	box-sizing: border-box;
	/* Make sure that padding and width stays in place */
	margin-top: 6px; /* Add a top margin */
	margin-bottom: 16px; /* Bottom margin */
	resize: vertical
		/* Allow the user to vertically resize the textarea (not horizontally) */
}

input[type=submit] {
	background-color: #04AA6D;
	color: white;
	padding: 12px 20px;
	border: none;
	border-radius: 4px;
	cursor: pointer;
}

/* When moving the mouse over the submit button, add a darker green color */
input[type=submit]:hover {
	background-color: #45a049;
}

/* Add a background color and some padding around the form */
.container {
	border-radius: 5px;
	background-color: rgb(76, 119, 153);
	padding: 20px;
}

</style>
</head>

<body>
	<div class="menu">
		<nav class="site-navigation position-relative text-right"
			role="navigation">
			<ul
				class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
				<li class="active"><a href="main.php" class="nav-link" style="margin-bottom: 20px";>Home</a></li>

			</ul>
		</nav>
	</div>
	


	<div class="container">
		<form method="post" action="contact.php">

			<label for="fname">First Name</label> 
			<input type="text" name="firstname" placeholder="First Name">
			 <label for="lname">Last Name</label> 
			 <input type="text" name="lastname" placeholder="Last Name">
		    <label for="fname">E-Mail</label> 
		    <input type="text" name="email" placeholder="E-Mail">
			<label for="country">Country</label>
			<input type="text" name="country" placeholder="Country">
			<label for="subject">Subject</label>
			<textarea id="subject" name="subject" placeholder="Write something.."
				style="height: 200px"></textarea>

			<input type="submit" value="Submit">

		</form>
	</div>

</body>
</html>
